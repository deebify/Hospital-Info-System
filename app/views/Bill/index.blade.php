@extends('master')

@section('content')
<h1> Enter Patient ID to View is Bill</h1>
{{Form::open(array('action'=>'BillsController@Result','method'=>'post','class'=>'form-horizontal'))}}
        
	<div class="form-group">
        {{Form::label('PID', 'Enter PatientID *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('PID','#ID ',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
            {{Form::submit('View Patient Bill',array('class'=>'btn btn-success btn-lg col-md-3 col-md-offset-6'))}}
            </div>
{{Form::close()}}
@stop