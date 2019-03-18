@extends('layouts.app')
@section('body')
    <a href="." class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>By : {{ $post->user->name }}</small><br>
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