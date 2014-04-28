@extends('master')
@section('content')
<div class="row">
	<div class="well">
		<h1>{{$Status}}</h1>
	</div>
</div>

<h2>Patinet First Name : <strong>{{$PFNAME}}</strong> </h2>
<h2>Patinet Last Name :  <strong>{{$PLNAME}}</strong> </h2>
@if (isset($RoomNumber))
	<h2>Patient Room Number: {{$RoomNumber}}</h2>
@endif
@stop