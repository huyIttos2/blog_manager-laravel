@extends('layout.base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a blog</h1>
            <div>
                <form method="post" action="{{ route('blogs.update',$blog->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$blog -> name}}"/>
                        @if($errors->has('name'))
                            <p>{{ $errors -> first('name') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="last_name">content</label>
                        <input type="text" class="form-control" name="content" value="{{ $blog -> content }}"/>
                        @if($errors->has('content'))
                            <p>{{ $errors -> first('content') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">date_submit</label>
                        <input type="number" class="form-control" name="date_submit" value="{{ $blog->date_submit }}"/>
                        @if($errors->has('date_submit'))
                            <p>{{ $errors -> first('date_submit') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="city">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{$blog->quantity}}"/>
                        @if($errors->has('quantity'))
                            <p>{{ $errors -> first('quantity') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="country">image</label>
                        <input cols="25" rows="5" type="file" class="form-control" name="image">{{$blog -> image}}
                        />
                        @if($errors->has('image'))
                            <p>{{ $errors -> first('image') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
