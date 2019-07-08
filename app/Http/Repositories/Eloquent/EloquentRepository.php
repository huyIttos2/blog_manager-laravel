<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\Repository\BlogRepository;

abstract class EloquentRepository implements BlogRepository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract  public function getModel();
    public function  setModel(){
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        $result = $this->model->paginate(2);
        return $result;
    }
    public function  findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }
    public function create($data)
    {
        return $data->save();
    }
    public function update($data)
    {
        return $data->save();
    }
    public function destroy($object)
    {
        $object->delete();
    }
}