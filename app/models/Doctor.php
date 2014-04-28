<?php

class Doctor extends \Eloquent {
	
		protected $table = 'Doctor';
		public $timestamps = false;
	protected $fillable = array('DFNAME','DLNAME','SEX','DEPARTMENT','SPECIALIST',
		'PHONENUMBER','HOMEADDRESS','SOCIALSECURITYNUMBER','HIREDATE');
	protected $guarded = array('DoctorID');

	public static function CountDoctors()
	{
		$Number = self::count();

		return $Number;

	}

	public static function AllDoctors()
	{
		$Doc = self::all();

		return $Doc;

	}
	public static function ExistID($DoctorID)
	{
		$Found = self::where('DoctorID','=',$DoctorID);
		if(isset($Found))
			return $Found;
		else
			return False;
	}
	public static function Exist($SSN)
	{
		$Found = self::where('SOCIALSECURITYNUMBER','=',$SSN)->first();
		if(isset($Found))
			return $Found;
		else
			return False;
	}

}

	?>