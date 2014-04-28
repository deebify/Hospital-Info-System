@extends('master')
@section('content')
<h1> Patient Registeration Form </h1>

{{Form::open(array('action'=>'HospitalsController@form','method'=>'post','class'=>'form-horizontal'))}}
<hr>
<div class="well">
	<h3>Patient Information</h3>
</div>
{{Form::label('Prefix')}}
{{Form::select('Prefix',array('Ms' =>'Ms','Miss'=>'Miss','Mr'=>'Mr','Mrs'=>'Mrs'))}}
<br>

		<div class="form-group">
			<div class="row">
			<div class="col-md-12">
			<div class="well">
				{{Form::label('firstName')}}
				{{Form::text('firstName')}}

				{{Form::label('middleName')}}
				{{Form::text('middleName')}}

				{{Form::label('lastName')}}
				{{Form::text('lastName')}}
				<br>
				{{Form::label('birthdate')}}
				{{Form::selectRange('Day', 1, 31)}}
				{{Form::selectMonth('month')}}
				{{Form::selectRange('Year',2014,1960)}}
				
				<br>
				
				{{Form::label('age')}}
				{{Form::text('age')}}

				{{Form::label('Sex')}}
				{{Form::select('Sex',array('M' => 'Male','F'=>'Female'))}}

				{{Form::label('MaritalStatus')}} 			
				{{Form::select('MaritalStatus',array('s' =>'Single','M'=>'Married','D'=>'Divorced'))}}

				</div>
			</div>
		</div>
	</div>

<br>

				<div class="form-group">
				<div class="row">
				<div class="col-md-12">
				<div class="well">
				{{Form::label('StreetAddress')}}
				{{Form::text('StreetAddress')}}

				{{Form::label('socialSecurityNumber')}}
				{{Form::text('socialSecurityNumber')}}

				{{Form::label('HomePhone')}}
				{{Form::text('HomePhone')}}
				<br>
				{{Form::label('City')}}
				{{Form::text('City')}}

				{{Form::label('State')}}
				{{Form::text('State')}}

				{{Form::label('Zipcode')}}
				{{Form::text('Zipcode')}}
				<br>
				{{Form::label('Occupation')}}
				{{Form::text('Occupation')}}

				{{Form::label('Employer')}}
				{{Form::text('Employer')}}

				{{Form::label('EmployerPhone')}}
				{{Form::text('EmployerPhone')}}
				</div></div></div></div>
<br>
<hr>
<div class="well">
<h3> Insurance Information </h3>
</div>
<br>

{{Form::label('InsuredFirstName')}}
{{Form::text('InsuredFirstName')}}

{{Form::label('InsuredLastName')}}
{{Form::text('InsuredLastName')}}


{{Form::label('InsuredSocialSecurityNumber')}}
{{Form::text('InsuredSocialSecurityNumber')}}

{{Form::label('InsuredInsuranceCompany')}}
{{Form::text('InsuredInsuranceCompany')}}


{{Form::label('InsuredPolicyNumber')}}
{{Form::text('InsuredPolicyNumber')}}

{{Form::label('InsuranceCompanyPhone')}}
{{Form::text('InsuranceCompanyPhone')}}
<br>
<hr>
{{Form::submit('Register',array('class'=>'btn btn-primary btn-lg active'))}}
{{Form::close()}}

@stop