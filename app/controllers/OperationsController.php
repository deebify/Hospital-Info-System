<?php

class OperationsController extends \BaseController {


	public function index()
	{
		$Total  = Operation::TotalOPRoom();
		$view = View::make('Operation.reserve');
		$view->title='Reserve an Operation';
		$view->Total=$Total;

		return $view;
	}


	public function Reserve()
	{

		$PSSN=Input::get('PSSN');
		$DID1=Input::get('DID1');
		$DID2=Input::get('DID2');
		$DID3=Input::get('DID3');

		//Check The Patient Exist
		$ExistP = Patient::Exist($PSSN);
		$ExistD1 = Doctor::ExistID($DID1);
		$ExistD2 = Doctor::ExistID($DID2);
		$ExistD3 = Doctor::ExistID($DID3);
		
		if($ExistP && $ExistD1 && $ExistD2 && $ExistD3)
		{
			//Date And Time
			//Format --- YYYY-MM-DD HH:MM:SS
			$YYYY = 2014;
			$FDay = Input::get('FDay');
			$FMon = Input::get('FMon');
			$FHH =	Input::get('FHH');
			$FMM = Input::get('FMM');
			$SS  = 10;
			$THH = Input::get('THH');
			$TMM  = Input::get('TMM');
			
			//Save The Operation time in Datbase
			Operation::create(array('FromTime' => "$YYYY-$FMon-$FDay $FHH:$FMM:$SS",
									'ToTime' => "$YYYY-$FMon-$FDay $THH:$TMM:$SS"));


			$OperatinID = Operation::where('FromTime','=',"$YYYY-$FMon-$FDay $FHH:$FMM:$SS")->first()->OPRoomID;

			DB::table('Patient')->where('SOCIALSECURITYNUMBER',$PSSN)
			->update(array('OPRoomID'=>$OperatinID));

			DB::table('Doctor')->where('DoctorId','=',$DID1)->update(array('OPRoomID'=>$OperatinID));
			DB::table('Doctor')->where('DoctorId','=',$DID2)->update(array('OPRoomID'=>$OperatinID));
			DB::table('Doctor')->where('DoctorId','=',$DID3)->update(array('OPRoomID'=>$OperatinID));

			return 'Done';
		}
		else
		{
			return 'Information Errors';
		}
		
	}

}