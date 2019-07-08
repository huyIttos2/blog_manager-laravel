@extends('layout.base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <caption align="center"> <h1 class="display-3" >Are you sure delete {{$blog -> name}}</h1></caption>
            <div style="margin-top: 15px" class="col">
                <a href="{{route('blogs.destroy',$blog->id)}}" style="float:left" class="btn btn-danger">Yes</a>
                <input type="submit" name="action" value="No" onclick="window.history.back();" class="btn btn-primary" style="float: right">
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Content</td>
                    <td>Date Submit</td>
                    <td>Image</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{$blog->name}}</td>
                    <td>{{$blog->content}}</td>
                    <td>{{$blog->date_submit}}</td>
                    <td>{{$blog->image}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection