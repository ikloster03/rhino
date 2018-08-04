<?php namespace Modules\User\Http\Middleware;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Session\Store;
use Modules\User\Repositories\Admin\AdminAuthentication;

class AdminMiddleware {

    /**
     * @var Authentication
     */
    private $auth;
    /**
     * @var SessionManager
     */
    private $session;
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Redirector
     */
    private $redirect;
    /**
     * @var Application
     */
    private $application;
    public function __construct(AdminAuthentication $auth, Store $session, Request $request, Redirector $redirect, Application $application)
    {
        $this->auth = $auth;
        $this->session = $session;
        $this->request = $request;
        $this->redirect = $redirect;
        $this->application = $application;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {

        if (!$this->auth->check($request)) {

            if ($request->ajax())
            {
                abort(401, "Unathorized");
            } else {
                $this->session->put('url.intended', $this->request->url());
            }
            // Redirect to the login page
            return $this->redirect->route('admin.login');
        }

        \Config::set("auth.defaults.guard","admins");
        return $next($request);
    }

    
}
