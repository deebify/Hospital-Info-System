@extends('master')

@section('content')
<h1>Add a New Doctor </h1>
<div class="well">
<h1>Doctor Basic Information</h1>
</div>
{{Form::open(array('action'=>'ManagementsController@AddNewDoc','method'=>'post','class'=>'form-horizontal'))}}
        <div class="form-group">
        {{Form::label('DoctorFirstName', 'Doctor First Name *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('DoctorFirstName','Doctor Name ',array('class'=>'form-control'))}}
        </div>
        </div>
        
        
        <div class="form-group">
        {{Form::label('DoctorLastName', 'Doctor Last Name *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('DoctorLastName', 'Doctor Last Name', array('class'=>'form-control'))}}
        </div>

    </div>

         <div class="form-group">
          <div class="col-sm-12">
           {{Form::label('Sex', 'Sex *', array('class'=>'control-label col-sm-3'))}}
           {{Form::select('Sex', array('Male'=>'Male','Female'=>'Female'))}}
        </div>
    </div>
             <div class="form-group">
        {{Form::label('Department', 'Department', array('class'=>'control-label col-sm-3'))}}
         <div class="col-sm-9">
             {{Form::text('Department', 'Department',array('class' =>'form-control'))}}
         </div>
         </div>         

         <div class="form-group">
        {{Form::label('Specialist', 'Specialist', array('class'=>'control-label col-sm-3'))}}
         <div class="col-sm-9">
             {{Form::text('Specialist', 'Specialist',array('class' =>'form-control'))}}
         </div>
         </div>
<div class="well">
<h1>Extra Information</h1>
</div>
             <div class="form-group">
        {{Form::label('PhoneNumber', 'Phone Number', array('class'=>'control-label col-sm-3'))}}
         <div class="col-sm-9">
             {{Form::text('PhoneNumber', 'PhoneNumber',array('class' =>'form-control'))}}
         </div>
         </div> 

           <div class="form-group">
        {{Form::label('HomeAddress', 'Home Address', array('class'=>'control-label col-sm-3'))}}
         <div class="col-sm-9">
             {{Form::text('HomeAddress', 'HomeAddress',array('class' =>'form-control'))}}
         </div>
         </div> 

             <div class="form-group">
        {{Form::label('SSN', 'Social Security Number #', array('class'=>'control-label col-sm-3'))}}
         <div class="col-sm-9">
             {{Form::text('SSN', '#SSN',array('class' =>'form-control'))}}
         </div>
         </div> 

         <div class="form-group">
            {{Form::label('HireDate','Hire Date',array('class'=>'control-label col-xs-3'))}}
            <div class="col-xe-9">
            {{Form::selectRange('Day', 01, 31)}}
            {{Form::selectRange('Mon',01,12)}}
            {{Form::selectRange('Year',2014,1960)}}
            </div>
        </div>



        <div class="form-group">

            {{Form::submit('Register',array('class'=>'btn btn-success btn-lg col-md-3 col-md-offset-3'))}}

            {{Form::reset('Delete Entites', array('class'=>'btn btn-danger btn-lg col-md-3 col-md-offset-1'))}}
            </div>
{{Form::close()}}
@stop