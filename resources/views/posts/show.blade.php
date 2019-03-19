@extends('layouts.app')
@section('body')
    <a href="." class="btn btn-default">Go Back</a><br><br>
    <h1>{{$post->title}}</h1><br>
    <img style="width:100%" src="../public/storage/cover_images/{{$post->cover_image}}"><br><br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <medium>Author : {{ $post->user->name }}</medium><br>
    <small>Written on: {{ $post->created_at}}</small>
    <br>
    
   @if(!Auth::guest())
       @if(Auth::user()->id == $post->user_id)
            <a href="{{$post->id}}/edit" class="btn btn-default">Edit Post</a>

            <form class="pull-right" action="{{ route('posts.destroy', $post->id) }}" method="POST" >
                 @csrf
                <input type="Submit" class="btn btn-danger" value="Delete">  
                <input type="hidden" name="_method" value="DELETE">  

            </form>
        @endif
   @endif
   
@endsection