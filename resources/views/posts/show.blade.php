@extends('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">


        <h1 class="blog-title">{{$post->title}}</h1>
        <div class="blog-post">
            <p>{{$post->body}}</p>
        </div>

        <div class="blog-pagination">

            <a class="btn btn-outline-primary">older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </div>
    </div>
@endsection
