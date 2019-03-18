@extends('layouts/app')
@section('body')
<h1>Hello sankalp</h1>

<br>
<?php print_r($mysub);?>
<br>

@if($mymarks ==10)
{{$mymarks}}
@elseif($mymarks==20)
@{{$mymarks}}
@else
{{$mymarks}}
@endif

{!! $alert !!}
@endsection