<?php namespace Modules\User\Repositories;

use Modules\Base\Repositories\EntityBaseRepository;

class BaseUserRepository extends EntityBaseRepository
{

    protected $search_field;
    protected $search_limit = 30;

    public function search($request, $cb = ""){
        $query = $this->model->select([
            'id',
            \DB::raw($this->search_field.' AS name')
        ]);

        if($request->get('search')) {

            $query = $query->where(\DB::raw('name'),'ILIKE', "%".mb_strtolower($request->get('search')) . "%");
        }else{

            $query = $query->where('id', ">", "0");
        }
        if($cb){
            $query = $cb($query);
        }

        $query->orderBy('name', 'ASC');

        $col = $query->take($this->search_limit)->get();
        // dd(\DB::getQueryLog());
        if($request->has('add_city')){
            $add_city = $request->get('add_city');
            $add= $this->model->find($add_city);
            if($add){

            }
            $i = 0;
            foreach($col as $item){
                if($item->id == $add_city){
                    $col->splice($i, 1);


                    break;
                }
                ++$i;
            }
            $col->prepend($add);
        }
        return $col;
    }

    public function updateInfo($model, $data)
    {
        $model->fill($data);
        $model->save();
        return $model;
    }

    public function updatePassword($model, $data)
    {

        if(!\Hash::check($data['old_password'],$model->password)){
            abort(422, "old_password|Вы ввели неверный пароль");
        }
        $model->password = \Hash::make($data['new_password']);

        $model->save();

        return $model;
    }
    public function destroy($model){

      return  $model->delete();
    }
}