<?php

class RoomsController extends \BaseController {

	public function index()
	{
		$view = View::make('Rooms.create');
		$view->title='Rooms Reservation';

	 	$view->TR=Room::TotalRooms();
		$view->LR=Room::RoomsLeft();
		$view->BS=Room::BusyRooms();

		 return $view;
	}

/**
 * 
 * This is Reserve Method, To Check If Patient Exist
 * 			if Exist, Check if he has Already a Room,
 *    		if he has Rooom return the RoomNumber 
 *      	
 *       	Else if It is not Exist so Reserver A Room 
 * 
 * 
 * 
 * 
 * */
	public function Reserve()
	{
		$CheckSSN = Input::get('SSN');
		$P = Patient::where('SOCIALSECURITYNUMBER','=',$CheckSSN)->get();
		$RoomNumber = rand(1,200);
		
		if(Patient::Exist($CheckSSN) && $P)
		{
			$patient = Patient::where('SOCIALSECURITYNUMBER','=',$CheckSSN)->first();
			$PatientID =Patient::where('SOCIALSECURITYNUMBER','=',$CheckSSN)->first()->PatientID;
			//if the patinet already has a room
			//
			//
			$CheckHasRoom = $patient->RoomID;
			//So he already has a ROOM 
			if(isset($CheckHasRoom))
			{
				$HisRoomNumber=Room::where('RoomID','=',$CheckHasRoom)->first();
				$view = View::make('Rooms.ReservedRoom');
				$view->title='Reserved Room';
				$view->ReservedRoom=$HisRoomNumber->RoomNumber;
				$view->StartTime=$HisRoomNumber->StartDate;
				$view->PFNAME=$patient->PFNAME;
				$view->PLNAME=$patient->PLNAME;

				return $view;
			}
			else
			{
				Room::create(array('RoomNumber'=>$RoomNumber));
				$RoomID = Room::where('RoomNumber','=',$RoomNumber)->first()->RoomID;
				DB::table('Patient')->where('SOCIALSECURITYNUMBER', $CheckSSN)->
				update(array('RoomID' => $RoomID));
				
				//After Created, go and Add Price
				DB::table('PatientBill')->insert(array('PatientID' =>$PatientID));
				$PatientBillID = DB::table('PatientBill')->where('PatientID','=',$PatientID)->first()->BillID;
				DB::table('BillItems')->insert(array('Item'=>'RoomReservation',
					'Fees'=>'500','TAX'=>'100','BillID'=>$PatientBillID));



				$view = View::make('Created');
				$view->title='Room Reserved';
				$view->Status='Now Room is Reserved';
				$view->PFNAME=$patient->PFNAME;
				$view->PLNAME=$patient->PLNAME;
				$view->RoomNumber=$RoomNumber; 
				return $view; 
			}

		}
		else
		{

			return Redirect::to('/Boot');
		}
	}


	public function show()
	{
		//this is Form to which is post to method SearchPatient
		
		$view = View::make('Rooms.SearchPatient');
		$view->title='Search Patient By Name';

		return $view;

			
	}

	public function SearchPatient()
	{	
		$PFNAME = Input::get('PFNAME');
		$PLNAME = Input::get('PLNAME');
		$view = View::make('Rooms.SearchResult');
		$view->title='Search Patient';
		$Res = Room::SearchRoomByName($PFNAME,$PLNAME);
		if(is_object($Res))
			{
				$view->status='Found';
				$view->SSN=$Res->SOCIALSECURITYNUMBER;
			}
		else
			$view->status='Not Found';

		return $view;
	}

}