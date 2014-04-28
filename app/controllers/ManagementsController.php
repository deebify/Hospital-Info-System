<?php

class ManagementsController extends \BaseController {


	public function index()
	{
		$view = View::make('Managements.index');
		$view->title='Manage';

		return $view;	
	}

	public function DocMan()
	{

	$Number = Doctor::CountDoctors();
	$Doc = Doctor::AllDoctors();
	 $view = View::make('Managements.DoctorManage');
	 $view->title='Admin:DoctorManagements';
	 $view->Number=$Number;
	 $view->Doc=$Doc;

	 return $view;
	}

	public function PatMan()
	{
		$PatientNum = Patient::CountPatients();
		$AllPatients = Patient::AllPatients();		
		$view = View::make('Managements.PatientManage');
		$view->title='Admin:PatientManagement';
		$view->Number=$PatientNum;
		$view->Patients=$AllPatients;

		return $view;
	}

	public static function RoomMan()
	{
		$All = Room::AllBusyRoom();
		$TotalRoom = Room::TotalRooms();
		$BusyRoom = Room::BusyRooms();
		$Free=Room::RoomsLeft();
		$view = View::make('Managements.RoomManage');
		$view->title='Admin:RoomManagement';
		$view->Busy=$BusyRoom;
		$view->Total=$TotalRoom;
		$view->Free=$Free;
		$view->All=$All;


		return $view;
	}

	public function DocAdd()
	{
		$view = View::make('Managements.AddNewDoc');
		$view->title='Admin:Add New Doctor';


		return $view;
	}

	public function AddNewDoc()
	{
		//all input 
		$DoctorFirstName=Input::get('DoctorFirstName');
		$DoctorLastName=Input::get('DoctorLastName');
		$Sex=Input::get('Sex');
		$Department=Input::get('Department');
		$Specialist=Input::get('Specialist');
		$PhoneNumber=Input::get('PhoneNumber');
		$HomeAddress=Input::get('HomeAddress');
		$SSN=Input::get('SSN');
		$Day=Input::get('Day');
		$Mon=Input::get('Mon');
		$Year=Input::get('Year');

		//Check if Doctor is Already Exist
		$Exist = Doctor::Exist($SSN);
		if(!$Exist)
		{
			Doctor::create(
				array(
					'DFNAME'=>$DoctorFirstName,
					'DLNAME'=>$DoctorLastName,
					'SEX'=>$Sex,
					'DEPARTMENT'=>$Department,
					'SPECIALIST'=>$Specialist,
					'PHONENUMBER'=>$PhoneNumber,
					'HOMEADDRESS'=>$HomeAddress,
					'SOCIALSECURITYNUMBER'=>$SSN
				)
				);
			$Doc = Doctor::Exist($SSN);
			$view = View::make('Managements.HasBeenRegisted');
			$view->title='Doctor Created';
			$view->Doc=$Doc;

			return $view;


		}
		else
		{
			$RegisteredDoc = $Exist;
			$view = View::make('Managements.RegisteredDoc');
			$view->title='Registered Doctor';
			$view->Doc=$RegisteredDoc;

			return $view;		}
		return ;
	}
}