@extends('master')

@section('content')
<h1>This Doctor is Aleady Registered in Hospital</h1>
<h2>Doctor's Name : <strong>{{$Doc->DFNAME}}</strong> <strong>{{$Doc->DLNAME}}</strong></h2>
<h3> Specialist <strong>{{$Doc->SPECIALIST}}</strong></h3>
<h3> Department <strong>{{$Doc->DEPARTMENT}}</strong></h3>
@stop