<?php

class Room extends \Eloquent {
	protected $table = 'Room';
	protected $fillable = [];
	public $timestamps = false;
	protected $guarded = array('RoomID');

	public static function TotalRooms()
	{
		return 200;
	}

	public static function BusyRooms()
	{
		$BusyRooms=self::all()->count();
		return $BusyRooms;
	}

	public static function RoomsLeft()
	{
		$Total  = self::TotalRooms();
		$Busy = self::BusyRooms();
		$RoomsLeft =  $Total - $Busy;
		return $RoomsLeft;
	}

	public static function AllBusyRoom()
	{
		$All = self::all();
		return $All;
	}
	public static function SearchRoomByName($PFNAME,$PLNAME)
	{
		$Found = Patient::where('PFNAME','=',$PFNAME,'and','PLNAME','=',$PLNAME)->first();
		if(isset($Found))
			return $Found;
		else
			return 0;
	}

}