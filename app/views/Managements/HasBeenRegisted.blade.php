@extends('master')

@section('content')

<h1>The Doctor Has been Registered in Hospital</h1>
<h3>Doctor Name <strong>{{$Doc->DFNAME}} {{$Doc->DLNAME}}</strong></h3>
<h3>Specialist : <strong>{{$Doc->SPECIALIST}}</strong></h3>
<h3>Department : <strong>{{$Doc->DEPARTMENT}}</strong></h3>
@stop