@extends('master')
@section('content')
<div class="well">
<h1>Patient Registration Form</h1>
</div>
{{Form::open(array('method'=>'post','action'=>'HospitalsController@form','class'=>'form-horizontal'))}}
        <div class="form-group">
        {{Form::label('PatientFirstName', 'Patient First Name *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('PatientFirstName','Patient Name ',array('class'=>'form-control'))}}
        </div>
        </div>
        
        <div class="form-group">
        {{Form::label('PatientMiddleName', 'Patient Middle Name',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('PatientMiddleName', 'Patient Middle Name', array('class'=>'form-control'))}}
        </div>
        </div>
        
        <div class="form-group">
        {{Form::label('PatientLastName', 'Patient Last Name *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('PatientLastName', 'Patient Last Name', array('class'=>'form-control'))}}
        </div>
        </div>
        
        <div class="form-group">
        {{Form::label('MaritalStatus','Marital Status',array('class'=>'control-label col-sm-3'))}}
        <div class="col-sm-1">
        {{Form::select('MaritalStatus',array('Single' =>'Single','Married'=>'Married','Divorced'=>'Divorced'))}}</div>
        
        {{Form::label('Sex', 'Sex *', array('class'=>'control-label col-sm-4'))}}
           <div class="col-sm-1">
           {{Form::select('Sex', array('Male'=>'Male','Female'=>'Female'))}}
            </div>
            
            {{Form::label('Age', 'Age', array('class'=>'control-label col-sm-2'))}}
         <div class="col-sm-1">
             {{Form::text('Age', 'Years',array('class' =>'form-control'))}}
              </div>
        </div>

        <div class="form-group">
            {{Form::label('Birth Date','Birth Date',array('class'=>'control-label col-xs-3'))}}
            <div class="col-xe-9">
            {{Form::selectRange('Day', 01, 31)}}
            {{Form::selectRange('Mon',01,12)}}
            {{Form::selectRange('Year',2014,1960)}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label('SocialSecurityNumber', 'Social Security Number *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('SocialSecurityNumber', '#SSN', array('class'=>'form-control'))}}
        </div>
        <hr>
        <br>
         </div>
 <div class="row">
    <div class="well">
        <h3> Contact Information</h3>
    </div>
    </div>
       
        <div class="form-group">
        {{Form::label('StreetAddress', 'Street Address', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('StreetAddress', 'Patient Address',array('class'=>'form-control'))}}
        </div>
        </div>
        
        <div class="form-group">
        {{Form::label('States', 'States', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('States', 'ie. Los Angelos, CA.',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
        {{Form::label('HomePhone', 'Home Phone', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('HomePhone', '+201-xxxx-xxx-xxx',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
        {{Form::label('Zipcode', 'Zipcode', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('Zipcode', '#Zipcode',array('class'=>'form-control'))}}
        </div>
        </div>
<hr>
<div class="row">
    <div class="well">
        <h3> Extra Information</h3>
    </div>
    </div>

        <div class="form-group">
        {{Form::label('Occupation', 'Occupation *', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('Occupation', 'ie, Enginner, Teatcher',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
        {{Form::label('Employer', 'Employer', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('Employer', 'Deep, Inc.',array('class'=>'form-control'))}}
        </div>
        </div>

         <div class="form-group">
        {{Form::label('EmployerPhone', 'Employer Phone', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('EmployerPhone', '#EmployerPhoneNumber',array('class'=>'form-control'))}}
        </div>
        </div>

        <div class="form-group">
        {{Form::label('Insurace', 'Insurance Company', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('Insurace', 'Company Of Insurance',array('class'=>'form-control'))}}
        </div>
        </div>
        
        <div class="form-group">
        {{Form::label('InsuracePolicyNumber', 'Insurace Policy Number', array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
        {{Form::text('InsuracePolicyNumber', '#PolicyNumber',array('class'=>'form-control'))}}
        </div>
        </div>
<hr>

            <div class="form-group">

            {{Form::submit('Reserve',array('class'=>'btn btn-success btn-lg col-md-3 col-md-offset-3'))}}

            {{Form::reset('Delete Entites', array('class'=>'btn btn-danger btn-lg col-md-3 col-md-offset-1'))}}
            </div>
{{Form::close()}}
@stop