<?php

class Patient extends \Eloquent {
	protected $table = 'Patient';
	protected $fillable = [];
	public $timestamps = false;
	protected $guarded = array('patientID');

	public static function Exist($SSN)
	{
		$CHK = static::where('SOCIALSECURITYNUMBER','=',$SSN)->first();
		if(isset($CHK))
			return $CHK;
		else
			return false;
	}

	public static function CountPatients()
	{
		$Number = DB::table('Patient')->count();

		return $Number;
	}

	public static function AllPatients()
	{
		$All = self::all();
		return $All;
	}

	public static function ExistPatientID($PatientID)
	{
		$Found = self::where('PatientID','=',$PatientID)->first();

		if(isset($Found))
			return $Found;
		else
			return False;
	}

}