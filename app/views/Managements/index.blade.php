@extends('master')
<?php 
$DocMan = URL::route('DocMan');
$PatMan = URL::route('PatMan');
$RoomMan = URL::Route('RoomMan');
$PatientBill = URL::route('PatientBill'); 
 ?>
@section('content')
<h1>This is Administrators Area, Controlled By Administrators</h1>
<h3><a href={{$DocMan}}>Manage Doctors Information</a></h3>
<h3><a href={{$PatMan}}>Manage Patient Information</a></h3>
<h3><a href={{$RoomMan}}>Manage Room Information</a></h3>
<h3> <a href={{$PatientBill}}> View Patient Bill</a></h3>
@stop