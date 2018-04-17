<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag) {
        //dd($tag);
        $posts = $tag->posts()->with('user')->latest()->paginate(10);
        //dd($posts);
        return view('posts.index', compact(['posts']));
    }
}
