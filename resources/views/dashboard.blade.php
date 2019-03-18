@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('posts.create')}}" class="btn btn-primary"> Create Post</a>
                    <br><br>
                   <h3>Your Blog Posts</h3>
                   <table class="table table-striped">
                       <tr>
                           <th>Title</th>
                           <th></th>
                           <th></th>
                       </tr>
                       @if(count($posts)>0)
                           @foreach($posts as $post)
                               <tr>
                                   <td>{{ $post->title }}</td>
                                   <td><a href="posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a></td>
                                   <td>
                                       <form class="pull-right" action="{{ route('posts.destroy', $post->id) }}" method="POST" >
                                             @csrf
                                            <input type="Submit" class="btn btn-danger" value="Delete">  
                                            <input type="hidden" name="_method" value="DELETE">  

                                      </form>
                                  </td>
                               </tr>
                           @endforeach
                        @else
                            <p>You have no post yet!</p>   
                       @endif
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
