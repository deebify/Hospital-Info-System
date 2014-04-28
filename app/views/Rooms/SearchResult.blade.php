@extends('master')
<?php 


 ?>
@section('content')

<h1>Room {{$status}}</h1>

@if ($status == 'Found')
<h3>Patient SSN is : {{$SSN}}</h3>
@endif


@stop