@extends('layouts/app')
@section('body')
    <h1>Welcome to service</h1>
    @if( @count($datas) >0 )
        <ul class="list-group">
        @foreach($datas as $data)
           <li class="list-group-item">{{$data}}</li>
        @endforeach
        </ul>

    @endif
@endsection