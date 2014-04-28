<?php

class HospitalsController extends \BaseController {

	
	public function index()
	{
		$NumDoc = Doctor::CountDoctors();
		$NumPat = Patient::CountPatients();
		$view=View::make('Home');
		$view->title='Hospital Systems, ';
		$view->NumDoc=$NumDoc;
		$view->NumPat=$NumPat;

 		return $view;
	}


	public function register()
	{
	 	$view=View::make('Register');
 	 	$view->title='Patient Registeration Form';
 	 	 	return $view;
	}




}