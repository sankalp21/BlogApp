@extends('layouts.app')
@section('body')
    <a href="." class="btn btn-default">Go Back</a><br><br>
    <h1>{{$post->title}}</h1><br>
    <img style="width:100%" src="../public/storage/cover_images/{{$post->cover_image}}"><br><br>
    <div class="container">
    <blockquote class="quote-card green-card">
              <p>
                {!! $post->body !!}
              </p>
        
              <cite>
                -{{ $post->user->name }}
              </cite>
     </blockquote>
<!--
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <medium>Author : {{ $post->user->name }}</medium><br>
-->
    <small>Written on: {{ $post->created_at}}</small>
    </div>
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
        <br>
         <div class="alert alert-success" style="display:none"></div>
        <div class="jumbotron">
            <h4>Comment Box</h4>
        
             <div>
              <medium>{{ Auth::user()->name }}</medium>
               <form id="form">
                   <div class="row">
                       <input type="text" class="col-md-9 " name="comment" id="comment" required>
                       <div class="col-md-1"></div>
                       <button id="ajaxsave" class=" col-md-2 btn btn-primary">
                           <ion-icon name="send"></ion-icon>
                       </button>
                   </div>
               </form>
            </div>
            <hr>
            
                <div class="commentarea">
                    @if(count($comments)>0)
                       @foreach($comments as $comment)
                           <medium>{{ $comment->user_name }}</medium>
                           <p>{{ $comment->comment }}</p>
                           <small>{{ $comment->created_at }}</small>
                           <hr>
                       
                       @endforeach
                    
                    @else
                       <p>"No comments found"</p>
                    
                    
                    <div id="commentfetch"></div>
                    @endif
                </div>
            
            
        </div>
        
        <script >
                   
                $('#ajaxsave').click(function(){
                
                    $.ajax({
                      url: "{{ route('comments.store') }}",
                      method: 'POST',
                      data: {
                          "_token": "{{ csrf_token()}}",
                         "comment": $('#comment').val(),
                         "post_id": "{{ $post->id }}",
                          "user_name": "{{ Auth::user()->name }}"
                      },
                      success: function(result){
                         $('.alert').show();
                         $('.alert').html(result.success);
                      }});
                    
                    $.ajax({
                         url:"{{ route('comments.show',$post->id) }}",
                         method:'GET',
                         dataType: 'json',
                         success: function(response){
                             $('.commentarea').empty();
                              var len=0;
                             if(response['data'] != null){
                                 len = response['data'].length;
                                 
                                 for(var i=0; i<len; i++){
                                     var user= response['data'][i].user_name;
                                     var comment= response['data'][i].comment;
                                     var created_at=response['data'][i].created_at;
                                     
                                     var comment_data="<medium>"+user+"</medium>"+
                                                      "<p>"+comment+"</p>"+
                                                      "<small>"+created_at+"</small>"+
                                                      "<hr>";
                                     $('.commentarea').append(comment_data,"");
                                 }
                                 
                               }else{
                                   $('#commentfetch').append("No comments found","");
                               }
                         }
                     });
                    
                   });
        
        
        </script>
        
        
   @endif
    
       
 
@endsection