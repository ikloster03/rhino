<?php namespace Modules\Base\Repositories;
use Illuminate\Database\Eloquent\Builder;
use Modules\Base\Repositories\BaseRepository;
use Input;
/**
 * Class EloquentCoreRepository
 *
 * @package Modules\Core\Repositories\Eloquent
 */
abstract class EntityBaseRepository implements BaseRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model An instance of the Eloquent Model
     */
    protected $model;
    /**
     * @param Model $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function getModel(){
        return $this->model;
    }
    /**
     * @param  int    $id
     * @return object
     */

    public function allAdmin($options = array(), $model = null){

        $items = $model ? $model : $this->model->query();

        $page = request()->get('page') ? request()->get('page') : 1;
        $perPage = request()->get('per_page');


        $search = request()->get('search') ? request()->get('search') : "";
        $searchFields = isset($options['search']) ? $options['search'] : array('name');
        $sort = request()->get('sort') ? request()->get('sort') : (isset($options['sort']) ? $options['sort'] : "");
        if(isset($options['with'])){
            foreach($options['with'] as $option){
                $items->with($option);
            }
        }
        if(isset($options['cb'])){
            $items = $options['cb']($items);
        }

        $order = request()->get('order') ? request()->get('order') : (isset($options['order']) ? $options['order'] : "");
        $sort = count(explode('.', $sort)) > 1 ? $sort : (!empty($options['table']) && empty($options['raw_sort']) ? $options['table'].".".$sort : $sort );


        $count = isset($options['count']) ? $options['count'] : $items->count();

        if($search) {
           $items = $items->where(function($query) use ($searchFields, $search, $options) {
                foreach($searchFields as $field){
                    $fieldArr = explode('.', $field);

                    $query->orWhere(count($fieldArr) == 1 ?  (!empty($options['table']) ? $options['table'].".".$field : $field ) : $field, 'ILIKE', '%'.$search.'%');
                }
            });

        }
        if($page && $perPage) {

            $items = $items->skip($perPage * ($page - 1))->take($perPage);

        }
        if($sort && $order) {

            $items = $items->orderBy($sort, $order);
        }

        return array("items"=>$items->get(), "count" => $count);


    }
    public function getQueryOptions($options){
        $page = request()->get('page');
        $perPage = request()->get('per_page');
        $search = request()->get('search') ? request()->get('search') : "";
        $searchFields = isset($options['search']) ? $options['search'] : array('name');
        $sort = request()->get('sort') ? request()->get('sort') : (isset($options['sort']) ? $options['sort'] : "");

    }

    public function allUser($options = array(), $model = null){

        $items = $model ? $model : $this->model->query();
        $page = request()->get('page');
        $perPage = request()->get('per_page') ? request()->get('per_page') : (!empty($options['per_page']) ? $options['per_page'] : null);

        $search = request()->get('search') ? request()->get('search') : "";
        $searchFields = isset($options['search']) ? $options['search'] : array('name');
        $sort = request()->get('sort') ? request()->get('sort') : (isset($options['sort']) ? $options['sort'] : "");
        if(isset($options['with'])){
            foreach($options['with'] as $option){
                $items->with($option);
            }
        }
        if(isset($options['cb'])){
            $items = $options['cb']($items);
        }
        switch($sort){
            case "company":
                $sort = "company_id";
            case "department":
                $sort = "department_id";
        }
        $order = request()->get('order') ? request()->get('order') : (isset($options['order']) ? $options['order'] : "");
        $sort = count(explode('.', $sort)) > 1 ? $sort : (!empty($options['table']) && empty($options['raw_sort']) ? $options['table'].".".$sort : $sort );


        $count = isset($options['count']) ? $options['count'] : $items->where(!empty($options['table']) ? $options['table'].'.user_id' : 'user_id', !empty($options['user']) ? $options['user']->id :  \Auth::user()->id)->count();
        if($search) {
            $items = $items->where(function($query) use ($searchFields, $search) {
                foreach($searchFields as $field){
                    $query->orWhere(!empty($options['table']) ? $options['table'].".".$field : $field, 'LIKE', '%'.$search.'%');
                }
            });

        }
        if($page && $perPage) {
            $items = $items->skip($perPage * ($page - 1))->take($perPage);
        }
        if($sort && $order) {

            $items = $items->orderBY($sort, $order);
        }
        if(\Auth::user()){

            $items = $items->where(!empty($options['table']) ? $options['table'].'.user_id' : 'user_id', !empty($options['user']) ? $options['user']->id :  \Auth::user()->id);
        }
        return array("items"=>$items->get(), "count" => $count);


    }

    public function allByPage($options = array(), $model = null){


        $items = $model ? $model : $this->model->query();

        $page = request()->get('page') ? request()->get('page'): 1;
        $perPage = request()->get('per_page');

        $search = request()->get('search') ? request()->get('search') : "";
        $searchFields = isset($options['search']) ? $options['search'] : array('name');
        $sort = request()->get('sort') ? request()->get('sort') : (isset($options['sort']) ? $options['sort'] : "");
        if(isset($options['with'])){
            foreach($options['with'] as $option){
                $items->with($option);
            }
        }
        if(isset($options['cb'])){
            $items = $options['cb']($items);
        }

        $order = request()->get('order') ? request()->get('order') : (isset($options['order']) ? $options['order'] : "");
        $sort = count(explode('.', $sort)) > 1 ? $sort : (!empty($options['table']) && empty($options['raw_sort']) ? $options['table'].".".$sort : $sort );


        $count = isset($options['count']) ? $options['count'] : $items->count();

        if($search) {
            $items = $items->where(function($query) use ($searchFields, $search, $options) {
                foreach($searchFields as $field){
                    $fieldArr = explode('.', $field);

                    $query->orWhere(count($fieldArr) == 1 ?  (!empty($options['table']) ? $options['table'].".".$field : $field ) : $field, 'ILIKE', '%'.$search.'%');
                }
            });

        }
        if($page && $perPage) {

            $items = $items->skip($perPage * ($page - 1))->take($perPage);

        }
        if($sort && $order) {

            $items = $items->orderBy($sort, $order);
        }

        return array("items"=>$items->get(), "count" => $count);



    }

    public function find($id)
    {
        if (method_exists($this->model, 'translations')) {
            return $this->model->with('translations')->find($id);
        }
        return $this->model->find($id);
    }
    public function findOrFail($id)
    {
        if (method_exists($this->model, 'translations')) {
            return $this->model->with('translations')->findOrFail($id);
        }
        return $this->model->findOrFail($id);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        if (method_exists($this->model, 'translations')) {
            return $this->model->with('translations')->orderBy('created_at', 'DESC')->get();
        }
        return $this->model->orderBy('created_at', 'DESC')->get();
    }
    /**
     * @param  mixed  $data
     * @return object
     */
    public function create($data)
    {
        return $this->model->create($data);
    }
    /**
     * @param $model
     * @param  array  $data
     * @return object
     */
    public function update($model, $data)
    {
        $model->update($data);
        return $model;
    }
    /**
     * @param  Model $model
     * @return bool
     */
    public function destroy($model)
    {

        return $model->delete();
    }
    /**
     * Return all resources in the given language
     *
     * @param  string                                   $lang
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function allTranslatedIn($lang)
    {
        return $this->model->whereHas('translations', function (Builder $q) use ($lang) {
            $q->where('locale', "$lang");
        })->with('translations')->orderBy('created_at', 'DESC')->get();
    }
    /**
     * Find a resource by the given slug
     *
     * @param  string $slug
     * @return object
     */
    public function findBySlug($slug)
    {
        if (method_exists($this->model, 'translations')) {
            return $this->model->whereHas('translations', function (Builder $q) use ($slug) {
                $q->where('slug', $slug);
            })->with('translations')->first();
        }
        return $this->model->where('slug', $slug)->first();
    }
    /**
     * Find a resource by an array of attributes
     * @param  array  $attributes
     * @return object
     */
    public function findByAttributes(array $attributes)
    {
        $query = $this->buildQueryByAttributes($attributes);
        return $query->first();
    }
    /**
     * Get resources by an array of attributes
     * @param array $attributes
     * @param null|string $orderBy
     * @param string $sortOrder
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getByAttributes(array $attributes, $orderBy = null, $sortOrder = 'asc')
    {
        $query = $this->buildQueryByAttributes($attributes, $orderBy, $sortOrder);
        return $query->get();
    }
    /**
     * Build Query to catch resources by an array of attributes and params
     * @param array $attributes
     * @param null|string $orderBy
     * @param string $sortOrder
     * @return \Illuminate\Database\Query\Builder object
     */
    private function buildQueryByAttributes(array $attributes, $orderBy = null, $sortOrder = 'asc')
    {
        $query = $this->model->query();
        if (method_exists($this->model, 'translations')) {
            $query = $query->with('translations');
        }
        foreach ($attributes as $field => $value) {
            $query = $query->where($field, $value);
        }
        if (null !== $orderBy) {
            $query->orderBy($orderBy, $sortOrder);
        }
        return $query;
    }
    /**
     * Return a collection of elements who's ids match
     * @param array $ids
     * @return mixed
     */
    public function findByMany(array $ids)
    {
        $query = $this->model->query();
        if (method_exists($this->model, 'translations')) {
            $query = $query->with('translations');
        }
        return $query->whereIn("id", $ids)->get();
    }
    /**
     * Clear the cache for this Repositories' Entity
     * @return bool
     */
    public function clearCache()
    {
        return true;
    }
}