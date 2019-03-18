@extends('layouts.app')
@section('body')
    <h1>Create Post</h1>
   <form action="{{ route('posts.store')}}" method="POST">
    
     @csrf
      <div class="form-group">
         <label>Title</label>
         <input type="text" placeholder="Title" name="title" class="form-control"> 
      </div>
       <div class="form-group">
         <label>Body</label>
           <textarea id="article-ckeditor" rows="10" cols="50" placeholder="Body Text" name="body" value="body" class="form-control"> </textarea>
      </div>
      <div class="form-group">
          <input type="submit" class="form-control btn btn-primary" >
      </div>
   </form>
   
@endsection