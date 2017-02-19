@extends('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            @foreach ($posts as $post)
                @include ('posts.post')
            @endforeach

        </div>
        <div class="blog-pagination">

            <a class="btn btn-outline-primary">older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </div>
    </div>
@endsection