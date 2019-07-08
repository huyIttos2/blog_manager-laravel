<?php


namespace App\Http\Repositories\Repository;


interface BlogRepository
{

    public function getAll();

    public function findById($id);

    public function create($data);

    public function update($data);

    public function destroy($object);
}