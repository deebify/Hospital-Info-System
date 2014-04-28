@extends('master')


@section('content')
<h1>This Patient was Reserved at Room #{{$ReservedRoom}}</h1>
<h2>At {{$StartTime}}</h2>
<div class="row">
<div class="wel">
<h3>Patinet Information</h3>	
</div>
<h4>First Name: <strong>{{$PFNAME}}</strong></h4>
<h4>Last Name : <strong>{{$PLNAME}}</strong></h4>
</div>
@stop