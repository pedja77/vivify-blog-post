@extends('layouts.master')

@section('title')
    Posts
@endsection

@section('content')
   
<div class="col-sm-12 blog-main">
        @foreach($posts as $post)
        
                <a href="{{route('single-post', ['id' => $post->id])}}">{{ $post->title  }}</a>
                <p>by <i><a href="#">{{  $post->user->name }}</a></i></p>
                <p>{{ $post->body }}</p>
        @endforeach       
</div>  
@endsection 
