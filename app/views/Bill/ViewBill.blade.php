@extends('master')

@section('content')
<h2>Patinet Name <strong>{{$PFNAME}} {{$PLNAME}}</strong></h2>

<h4> List Of All Bills of PatientID is <strong>{{$PID}}</strong></h4>
<h3>Total is <strong>${{$TOTAL}}</strong></h3>

<table class="table table-hover">
   <thead>
      <tr>
      	 <th>Service</th>
         <th>Fees</th>
         <th>Tax</th>
         <th>Total</th>
      </tr>
   </thead>
   <tbody>
 @foreach ($bill as $one)
      <tr>
         <td>{{$one->Service}}</td>
         <td>${{$one->FEES}}</td>
         <td>${{$one->TAX}}</td>
         <td>${{$one->Total}}</td>
      </tr>
      @endforeach
   </tbody>
</table>

@stop