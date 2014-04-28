<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index()
	{
		$view=View::make('Register1');
		$view->title='Bootstrap';

		return $view;
	}

	public function form()
	{

		//When the form is posted, Validate, the save into databases
		//First Validate by SOCIALSECURITYNUMBER
		$CheckSSN = Input::get('SocialSecurityNumber');
		$SSN = Patient::where('SOCIALSECURITYNUMBER','=',$CheckSSN)->first();
		if(Patient::Exist($CheckSSN) && $SSN)
		{
			$HIS = $SSN->CREATED_AT;
			$view = View::make('Regisered');
			$view->title='Registered Patient';
			$view->History=$HIS;
			return $view;
		}
		else
		{
		$PFNAME = Input::get('PatientFirstName');
		$PMNAME = Input::get('PatientMiddleName');
		$PLNAME = Input::get('PatientLastName');
		$MARITALSTATUS = Input::get('MaritalStatus');
		$SEX = Input::get('Sex');
		$AGE = Input::get('Age');
		$STREETADDRESS=Input::get('StreetAddress');
		$STATE = Input::get('States');
		$HOMEPHONE = Input::get('HomePhone');
		$ZIPCODE = Input::get('Zipcode');
		$OCCUPATION = Input::get('Occupation');
		$EMPLOYER=Input::get('Employer');
		$EMPLOYERPHONENUMBER=Input::get('EmployerPhone');
		$INSURANCECOMPANY=Input::get('Insurace');
		$INSURANCEPOLICYNUMBER=Input::get('InsuracePolicyNumber');
		$CREATED_AT=date("Y-m-d H:i:s");
		$DAY = Input::get('Day');
		$MON = Input::get('Mon');
		$YR = Input::get('Year');
		$BIRTHDATE = $YR.'-'.$MON.'-'.$DAY;
		
		$Saved  = Patient::create(array(
			'PFNAME'=>$PFNAME,
			'PMNAME'=>$PMNAME,
			'PLNAME'=>$PLNAME,
			'MARITALSTATUS'=>$MARITALSTATUS,
			'SEX' =>$SEX,
			'AGE'=>$AGE,
			'STREETADDRESS'=>$STREETADDRESS,
			'STATE'=>$STATE,
			'HOMEPHONE'=>$HOMEPHONE,
			'ZIPCODE'=>$ZIPCODE,
			'OCCUPATION'=>$OCCUPATION,
			'EMPLOYER'=>$EMPLOYER,
			'EMPLOYERPHONENUMBER'=>$EMPLOYERPHONENUMBER,
			'INSURANCECOMPANY'=>$INSURANCECOMPANY,
			'INSURANCEPOLICYNUMBER'=>$INSURANCEPOLICYNUMBER,
			'CREATED_AT'=>$CREATED_AT,
			'BIRTHDATE'=>$BIRTHDATE,
			'SOCIALSECURITYNUMBER'=>$CheckSSN
			));
		if(isset($Saved)){

			$patient = Patient::where('SOCIALSECURITYNUMBER','=',$CheckSSN)->first();
			$view = View::make('Created');
			$view->title ='Stored Successfully';
			$view->Status='Now, Patient is Registered';
			$view->PFNAME = $patient->PFNAME;
			$view->PLNAME = $patient->PLNAME;
			return $view;
		}
		else
		{
			return 'Somthing Error';
		}

		}
	}


}