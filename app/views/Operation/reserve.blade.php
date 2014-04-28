@extends('master')

@section('content')
	<h1>Reserve an Operation</h1>

<h3>Total Number of Operation Room <strong>{{$Total}}</strong></h3>
{{Form::open(array('action'=>'OperationsController@Reserve','method'=>'post','class'=>'form-horizontal'))}}

        <div class="form-group">
        {{Form::label('PSSN', 'Patient Social Security Number *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('PSSN','#SSN ',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
        {{Form::label('DID1', 'Doctor 1 ID *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('DID1','Doctor ID',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
        {{Form::label('DID2', 'Doctor 2 ID *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('DID2','Doctor ID',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
        {{Form::label('DID3', 'Doctor 3 ID *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('DID3','Doctor ID',array('class'=>'form-control'))}}
        </div>
        </div>
        <div class="form-group">

        </div>
		 <div class="form-group">
            {{Form::label('From','From',array('class'=>'control-label col-xs-3'))}}
            <div class="col-xe-9">
            Day 	: {{Form::selectRange('FDay', 1, 30)}}
            Month 	: {{Form::selectRange('FMon',1,12)}}
            HH 		: {{Form::selectRange('FHH',0,23)}}
            MM 		: {{Form::selectRange('FMM',0,59)}}
            </div>
        </div>

       <div class="form-group">
            {{Form::label('To','To',array('class'=>'control-label col-xs-3'))}}
            <div class="col-xe-9">
            HH 		: {{Form::selectRange('THH',0,23)}}
            MM 		: {{Form::selectRange('TMM',0,59)}}
            </div>
        </div>


        <div class="form-group">

            {{Form::submit('Register',array('class'=>'btn btn-success btn-lg col-md-3 col-md-offset-3'))}}

            {{Form::reset('Delete Entites', array('class'=>'btn btn-danger btn-lg col-md-3 col-md-offset-1'))}}
            </div>
{{Form::close()}}
@stop