@extends('layout.base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">blogs</h1>
            <a href="{{route('blogs.create')}}" class="btn btn-primary">Add</a>
            <input type="submit" name="action" value="Back" onclick="window.history.back();" class="btn btn-primary">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>content</td>
                    <td>date_submit</td>
                    <td>image</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $key => $blog)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{$blog->name}}</td>
                        <td>{{$blog->content}}</td>
                        <td>{{$blog->date_submit}}</td>
                        <td>{{$blog->image}}</td>
                        <td>
                            <a href="{{ route('blogs.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('blogs.delete',$blog->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$blogs->links()}}
        </div>
    </div>
@endsection
