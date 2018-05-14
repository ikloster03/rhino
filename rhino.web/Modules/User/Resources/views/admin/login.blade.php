@extends("base::dashboard.layouts.main")
@section("content")
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-sm-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="active" id="login-form-link">Войти</a>
                            </div>
                            <div class="col-6">
                                <a href="#" id="register-form-link">Зарегистрироваться</a>
                            </div>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <form id="login-form" action="https://phpoll.com/login/process" method="post" role="form"
                                  style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control"
                                           placeholder="Логин" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2"
                                           class="form-control" placeholder="Пароль">
                                </div>
                                <div class="form-group">
                                        <div class="col-sm-6 offset-sm-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                                   class="form-control btn btn-login" value="Войти">
                                        </div>
                                </div>
                            </form>
                            <form id="register-form" action="https://phpoll.com/register/process" method="post"
                                  role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control"
                                           placeholder="Логин" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="surname" id="email" tabindex="1" class="form-control"
                                           placeholder="Фамилия" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" id="email" tabindex="1" class="form-control"
                                           placeholder="Имя" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="midname" id="email" tabindex="1" class="form-control"
                                           placeholder="Отчество" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2"
                                           class="form-control" placeholder="Пароль">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2"
                                           class="form-control" placeholder="Подтвердите пароль">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 offset-3">
                                        <input type="submit" name="register-submit" id="register-submit"
                                               tabindex="4" class="form-control btn btn-register"
                                               value="Зарегистрироваться">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop

@section('scripts')
    <script type="text/javascript" src="{{mix('/js/dashboard.js','/assets')}}"></script>
@stop