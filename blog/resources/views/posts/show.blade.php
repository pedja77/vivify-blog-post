@extends('layouts.master')

@section('title')
    {{ $post->title  }}
@endsection

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">{{$post->created_at}} </p>

    <p class="blog-post">{{$post->body}}</p>
    </div>
    
    @include('comments.index')

    @include('comments.create')
@endsection






