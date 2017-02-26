<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
    //automatic dependency injection ....means passing argument
    public function index(Posts $posts){
        dd($posts);
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $posts = $posts->all();
        //$posts = (new \App\Repositories\Posts)->all();

        //$posts = Post::latest()->get();
        /*$posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();*/

        /*$archives = Post::archives();*/
        /*$archives = Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();*/

        return view('posts.index', compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        //Post::create(request()->all()+ ['user_id' => auth()->id()]);
        /*Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);*/

        //Post::create(request(['title', 'body']));
        /*$post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);*/

        return redirect('/');
        //dd(request(['title', 'body']));
        //return view('posts.store');
    }

}
