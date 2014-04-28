@extends('master')

@section('content')
<h1>Manage Patient Information</h1>
<h3>Lists of All Patinet in Hospital</h3>
<h2>Number Of Patients is {{$Number}}</h2>

<table class="table table-hover">
<thead>
	<tr>
	<th>PatientID</th>
	<th>Patient First Name</th>
	<th>Patient Last Name</th>
	<th>Social Security Number</th>
	<th>Register At</th>
	</tr>
</thead>
<tbody>
@foreach ($Patients as $Patinet)
	<tr>
         <td>{{$Patinet->PatientID}}</td>
         <td>{{$Patinet->PFNAME}}</td>
         <td>{{$Patinet->PLNAME}}</td>
         <td>{{$Patinet->SOCIALSECURITYNUMBER}}</td>
         <td>{{$Patinet->CREATED_AT}}</td>
    </tr>
@endforeach    
</tbody>
</table>

@stop