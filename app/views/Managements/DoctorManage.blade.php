@extends('master')

@section('content')
<h1>Manage Doctors Information</h1>

<h3>Lists of All Doctors in Hospital</h3>
<h2>Number Of Doctor is {{$Number}}</h2>
<?php 
$Add = URL::route('DocAdd'); ?>
<h4><a href={{$Add}}>Add New Doctor </a></h4>
<table class="table table-hover">
<thead>
	<tr>
	<th>DoctorID</th>
	<th>Doctor First Name</th>
	<th>Doctor Last Name</th>
	<th>Specialist</th>
	<th>Department</th>
	<th>Social Security Number</th>
	</tr>
</thead>
<tbody>
@foreach ($Doc as $Doctor)
	<tr>
         <td>{{$Doctor->DoctorID}}</td>
         <td>{{$Doctor->DFNAME}}</td>
         <td>{{$Doctor->DLNAME}}</td>
         <td>{{$Doctor->SPECIALIST}}</td>
         <td>{{$Doctor->DEPARTMENT}}</td>
         <td>{{$Doctor->SOCIALSECURITYNUMBER}}</td>
    </tr>
@endforeach    
</tbody>
</table>


@stop