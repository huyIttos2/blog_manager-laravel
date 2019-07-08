<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Repository\BlogRepository;
use App\Http\Services\BlogService;

class BlogServiceImpl implements BlogService
{

    protected $blogRepository;
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }
    public function getAll()
    {
        $blogs = $this->blogRepository->getAll();
        return $blogs;
    }
    public function findById($id)
    {
        $blog = $this->blogRepository->findById($id);
        return $blog;
    }
    public function create($request)
    {
        $blog = new blog();
        $blog->name = $request->name;
        $blog->content = $request->content;
        $blog->date_submit = $request->date_submit;
        $blog->image = $request->image;
        $this->blogRepository->create($blog);
    }
    public function update($request, $id)
    {
        $oldblog = $this->blogRepository->findById($id);
        $oldblog->name = $request->name;
        $oldblog->content = $request->content;
        $oldblog->date_submit = $request->date_submit;
        $oldblog->image = $request->image;
        $this->blogRepository->update($oldblog);
    }
    public function destroy($id)
    {
        $blog = $this->blogRepository->findById($id);
        $this->blogRepository->destroy($blog);
    }
}