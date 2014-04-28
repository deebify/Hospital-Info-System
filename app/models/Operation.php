<?php

class Operation extends \Eloquent {
	protected $table = 'OperationRoom';
	public $timestamps = false;
	protected $fillable = array('FromTime','ToTime','DURATION');
	protected $guarded = array('OPRoomID');


	public static function TotalOPRoom()
	{
		return 10;
	}
	
	public static function FindOperationRoomID()
	{
		# code...
	}


}