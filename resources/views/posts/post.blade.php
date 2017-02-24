<div class="blog-post">
    <div class="blog-post-title">
        <a href="/posts/{{$post->id}}" class="blog-post-title">
            {{$post->title}}
        </a>
    </div>
    <div class="blog-post-meta">
            {{ $post->user->name }} on
        {{--<p class="blog-post-meta">--}}
            {{$post->created_at->toFormattedDateString()}}
        {{--</p>--}}
    </div>

    <p>{{$post->body}}</p>
</div>