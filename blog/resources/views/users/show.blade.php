@extends('layouts.master')

@section('title')
    User
@endsection

@section('content')
<h2>{{  $user->name }}</h2>
<div class="pull-left">
    <a href="/posts">Back to posts</a>
</div>
<div class="col-sm-12 blog-main">
        @foreach($user->posts as $post)
        
                <a href="{{route('single-post', ['id' => $post->id])}}">{{ $post->title  }}</a>
                <p>by <i><a href="#">{{  $post->user->name }}</a></i></p>
                <p>{{ $post->body }}</p>
        @endforeach       
</div>  
@endsection 
