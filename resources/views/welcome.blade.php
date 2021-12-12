
@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{ route('search') }}" method="GET" class="form-inline">

                            <input type="text" name="query" placeholder="search here..." class="form-control" />
                            <input type="submit" class="btn btn-sm btn-primary form-control" value="Search" />
                        </form>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('post.add') }}" class="btn btn-warning">Add Post</a>
                        <a href="{{ route('category.add') }}" class="btn btn-success">Add Category</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h1 class="text-success">All Post</h1>
                    <div class="card-body">
                        @foreach($posts as $post)
                            <h3>{{ $post->name }}</h3>
                            <p>{{{ $post->description }}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h1 class="text-success">All Categories</h1>
                        <div class="card-body">
                            @foreach($categories as $category)
                                <h3>{{ $category->name }}</h3>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
