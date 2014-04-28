<?php

class BillsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function Main()
	{
		$view = View::make('Bill.index');
		$view->title='View Patient Bill';

		return $view;


	}

	public function Result()
	{
		$PID = Input::get('PID');

		$Bill = Bills::BillByPatientID($PID);
		$Patient = Patient::ExistPatientID($PID);
		if($Bill && $Patient)
		{
		$TOTALBILL = DB::table('Totals')->where('PatientID','=',$PID)->sum('Total');
		$view = View::make('Bill.ViewBill');
		$view->title='Patient Bill';
		$view->PFNAME = $Patient->PFNAME;
		$view->PLNAME = $Patient->PLNAME;
		$view->PID = $Patient->PatientID;
		$view->TOTAL = $TOTALBILL;
		$view->bill=$Bill;


		return $view;
	}else
	{
		$PID = Input::get('PID');
		$view = View::make('Bill.NoRegistered');
		$view->title='No Patient Found';
		$view->PID = $PID;

		return $view;

	}
	}

	

}