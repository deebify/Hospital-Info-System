@extends('master')

@section('content')

<h3>Search By Name</h3>
<h1>Enter Patient Name </h1>
{{Form::open(array('method'=>'post','action'=>'RoomsController@SearchPatient','class'=>'form-horizontal'))}}
<div class="form-group">
		{{Form::label('PFNAME','Patient First Name * ', array('class'=>'control-label col-sm-6'))}}
	<div class="col-sm-6">
		{{Form::text('PFNAME', 'Patient First Name',array('class'=>'form-control'))}}		
</div>
</div>

<div class="form-group">
		{{Form::label('PLNAME','Patient Last Name * ', array('class'=>'control-label col-sm-6'))}}
	<div class="col-sm-6">
		{{Form::text('PLNAME', 'Patient Last Name',array('class'=>'form-control'))}}		
</div>
</div>

<div class="form-group">

            {{Form::submit('Search Patient',array('class'=>'btn btn-primary btn-lg col-md-3 col-md-offset-3'))}}

            {{Form::reset('Clean', array('class'=>'btn btn-danger btn-lg col-md-3 col-md-offset-1'))}}
            </div>
{{Form::close()}}

@stop