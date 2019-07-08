@extends('layout.base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a Blog</h1>
            <div>
                <form method="post" action="{{ route('blogs.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Name</label>
                        <input type="text" class="form-control" name="name"/>
                        @if($errors->has('name'))
                            <p>{{ $errors -> first('name') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="last_name">Content</label>
                        <input type="text" class="form-control" name="content"/>
                        @if($errors->has('content'))
                            <p>{{ $errors -> first('content') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Date Submitted</label>
                        <input type="number" class="form-control" name="date_submit"/>
                        @if($errors->has('date_submit'))
                            <p>{{ $errors -> first('date_submit') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="city">Image</label>
                        <input type="number" class="form-control" name="image"/>
                        @if($errors->has('image'))
                            <p>{{ $errors -> first('image') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Add blog</button>
                </form>
            </div>
        </div>
    </div>
@endsection