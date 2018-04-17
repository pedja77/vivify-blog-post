<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Tag;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['only'=> ['create', 'store']]);
    }


    public function index()
    {
        //dd(auth()->user);
        // Prikaz svih elemenata resursa
        $posts = Post::getPublished()->with('user')->latest()->paginate(10);

        return view('posts.index', compact(['posts']));
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        //dd($post);
        return view('posts.show', compact(['post']));
    }

    public function create() {

        $tags = Tag::all();
        return view('posts.create', compact('tags'));
    }

    public function store(Request $request) {
        //dd($request->all());

        // $post = new Post();
        // $post->title = request()->get('title');
        // $post->body = request()->get('body');
        // $post->is_published = request()->get('published');

        // $post->save();

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required|min:15',
            'tags' => 'required|array'
        ]);

        //Post::create(request()->all());

        $post = new Post();
        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->user()->id;
        $post->is_published = request('is_published');
        $post->save();

        $post->tags()->attach(request('tags'));
        \Log::info($post->tags()->get());

        return redirect()->route('all-posts');

    }
}
