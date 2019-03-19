@extends('layouts.app')
@section('body')
    <h1>Edit Post</h1>
   <form action="{{ route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
    
     @csrf
      <div class="form-group">
         <label>Title</label>
         <input type="text" placeholder="Title" name="title" value="{{$post->title}}" class="form-control"> 
      </div>
       <div class="form-group">
         <label>Body</label>
           <textarea id="article-ckeditor" rows="10" cols="50" placeholder="Body Text" name="body" class="form-control">{{$post->body}} </textarea>
      </div>
      <div class="form-group">
          <input name="cover_image" type="file" accept="image/*">
      </div>
      <div class="form-group">
          <input type="submit" class="form-control btn btn-primary" >
      </div>
      <input type="hidden" name="_method" value="PUT" />
   </form>
   
@endsection