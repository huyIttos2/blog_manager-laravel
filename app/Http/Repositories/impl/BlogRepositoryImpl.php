<?php


namespace App\Http\Repositories\impl;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Http\Repositories\Repository\BlogRepository;
use App\Blog;

class BlogRepositoryImpl extends EloquentRepository implements BlogRepository
{

    public function getModel()
    {
        $model = Blog::class;
        return $model;
    }
}