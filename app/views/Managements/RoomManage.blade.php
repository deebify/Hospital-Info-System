@extends('master')

@section('content')
<h1>Total Number Of Room <strong>{{$Total}}</strong></h1>
<h2>Free Room <strong>{{$Free}}</strong></h2>
<h2>Busy Room <strong>{{$Busy}}</strong></h2>

<table class="table table-hover">
<thead>
	<tr>
	<th>RoomID</th>
	<th>Room Number</th>
	<th>Patient First Name</th>
	<th>Patient Last Name</th>
	<th>Social Security Number</th>
	<th>Reserver At</th>
	</tr>
</thead>
<tbody>
@foreach ($All as $Room)
	<tr>
         <td>{{$Room->RoomID}}</td>
         <td>{{$Room->RoomNumber}}</td>
         <?php $Patient = Patient::where('RoomID','=',$Room->RoomID)->first() ?>
         <td>{{$Patient->PFNAME}}</td>
         <td>{{$Patient->PLNAME}}</td>
         <td>{{$Patient->SOCIALSECURITYNUMBER}}</td>
         <td>{{$Room->StartDate}}</td>
    </tr>
@endforeach    
</tbody>
</table>


@stop