@extends('layouts.app')
@section('body')
    <h1>Posts</h1><br>
    @if( count($posts)>0 )
        @foreach($posts as $post)
           
            <div >
               <div class="row">
                   <div class="col-md-4 col-sm-4">
                      <img style="width:100%" src="public/storage/cover_images/{{ $post->cover_image }}">
                       
                   </div>
                   <div class="col-md-8 col-sm-8">
                      <h3><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                      <medium>Author : {{ $post->user->name }}</medium><br>
                      <small>Written on: {{ $post->created_at }}</small>  
                   </div>
               </div>
            </div>
            <br>
        @endforeach
        {{ $posts->links()}}
    @else
       <h3>"no post found"</h3>     
    @endif
    
   
@endsection