<?php

class Bills extends \Eloquent {
	protected $table = 'PatientBill';

	public $timestamps = false;

	protected $fillable = array('Item','Fees','TAX','BillID');


	public static function BillByPatientID($PatientID)
	{
		//check if PatientID is Exist
		$Found = Patient::ExistPatientID($PatientID);
		if($Found) //True
		{
			//Check if he has a Bill 
			$HasBill = self::where('PatientID','=',$PatientID)->first();
			if(isset($HasBill))
			{
				//return his bill
				
				//$F = DB::table('Totals')->where('PatientID','=',$PatientID)->first();


			//return its Bill
			$Bill = DB::table('PatientBill')
			->join('Patient','Patient.PatientID','=','PatientBill.PatientID')
			->join('Totals','Totals.PatientID','=','PatientBill.PatientID')->where('PatientBill.PatientID','=',$PatientID)
			->select('Totals.Total','Totals.TAX','Totals.FEES',
				'Totals.Service','Patient.PatientID','Patient.PFNAME','Patient.PLNAME')->get();
			
				return $Bill;
				//
				//return $F;

			}
			else
			{
				return False;
			}


		}
		else
		{
			return	False;
		}
	}


}