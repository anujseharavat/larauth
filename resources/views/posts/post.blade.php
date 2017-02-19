<div class="blog-post">
    <a href="/posts/{{$post->id}}" class="blog-post-title"> {{$post->title}}</a>
    <p class="blog-post-meta"> {{$post->created_at->toFormattedDateString()}}</p>
    <p>{{$post->body}}</p>
</div>