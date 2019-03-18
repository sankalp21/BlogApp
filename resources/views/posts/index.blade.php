@extends('layouts.app')
@section('body')
    <h1>Posts</h1>
    @if( count($posts)>0 )
        @foreach($posts as $post)
           
            <div >
                <h3><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small>By : {{ $post->user->name }}</small><br>
                <small>Written on: {{ $post->created_at }}</small>
            </div>
            <br>
        @endforeach
        {{ $posts->links()}}
    @else
       <h3>"no post found"</h3>     
    @endif
    
   
@endsection