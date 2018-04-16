@extends('layouts.master')

@section('title')
    Posts
@endsection

@section('content')
   
<div class="col-sm-12 blog-main">
        @foreach($posts as $post)
        
                <a href="{{route('single-post', ['id' => $post->id])}}">{{ $post->title  }}</a>
                <p>by <i><a href="{{route('users', ['user_id'=> $post->user_id])}}">
                        {{  $post->user->name }}
                        </a></i></p>
                <small>
                    @foreach($post->tags as $tag)
                        <a href="{{route('posts-tags', ['tag'=> $tag])}}">{{ $tag->name  }}</a>
                    @endforeach
                </small>
                <p>{{ $post->body }}</p>
        @endforeach   

    <nav class="blog-pagination">
       <a class="btn btn-outline-{{ $posts->currentPage() == 1 ? 'secondary disabled' : 'primary'  }}"
             href="{{ $posts->previousPageUrl() }}">Previous</a>
       <a class="btn btn-outline-{{ $posts->hasMorePages() ? 'primary' : 'secondary'  }}"
             href="{{ $posts->nextPageUrl() }}">Next</a>
   </nav>    
   <!-- {{$posts->links()}} -->
</div>  
@endsection 
