<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService =$blogService;
    }
    public function index()
    {
        $blogs = $this->blogService->getAll();
        return response()->json($blogs);
    }
    public function create()
    {
        return view('blogs.add');
    }
    public function store(Request $request)
    {
        $blog = $this->blogService->create($request);
        return response()->json($blog);
    }
    public function show($id)
    {
        $blog = $this->blogService->findById($id);
        return response()->json($blog);
    }
    public function edit($id)
    {
        $blog = $this->findById($id);
        return response()->json($blog);
    }
    public function update(Request $request, $id)
    {
        $blog = $this->blogService->update($request,$id);
        return response()->json($blog);
    }
    public function delete($id)
    {
        $blog = $this->findById($id);
        return view('blogs.delete', compact('blog'));
    }
    public function destroy($id)
    {
        $this->blogService->destroy($id);
        return response()->json($this->blogService->destroy($id));
    }
    public function findById($id)
    {
        $blog = blog::findOrFail($id);
        return response()->json($blog);
    }
}
