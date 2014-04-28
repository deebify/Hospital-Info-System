<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Route::get('/',function ()
// {
// 	$view=View::make('Home');
// 	$view->title='Hospital Systems, ';

// 	return $view;
// });

// Route::get('/Register',array('as'=>'Register'),function ()
// {
// 	$view=View::make('Register');
// 	$view->title='Patient Registeration Form';

// 	return $view;
// });

Route::post('/Boot',array('uses' =>'HospitalsController@form'));
Route::get('/Register', array('as'=>'Register','uses'=>'HospitalsController@register'));
Route::get('/',array('as'=>'Home','use'=>'HospitalsController@index'));
Route::resource('/','HospitalsController');


//Training
Route::get('/Boot',array('as' =>'Bootstrap','uses'=>'HomeController@index'));
Route::post('/Boot',array('uses'=>'HomeController@form'));


//Routes For Room
Route::post('/rooms', array('uses'=>'RoomsController@Reserve'));
Route::get('/room', array('as'=>'RoomReserve','uses'=>'RoomsController@index'));
Route::get('/room/search',array('as'=>'SearchPatient','uses'=>'RoomsController@show'));
Route::post('/room/search',array('uses'=>'RoomsController@SearchPatient'));

//Routes For Management
Route::get('/manage',array('as'=>'Manage','uses'=>'ManagementsController@index'));
Route::get('/manage/Doctor',array('as'=>'DocMan','uses'=>'ManagementsController@DocMan'));
Route::get('/manage/Patient',array('as'=>'PatMan','uses'=>'ManagementsController@PatMan'));
Route::get('/manage/Room',array('as'=>'RoomMan','uses'=>'ManagementsController@RoomMan'));
Route::post('/manage/Doctor', array('uses'=>'ManagementsController@AddNewDoc'));
Route::get('/manage/Doctor/add',array('as'=>'DocAdd','uses'=>'ManagementsController@DocAdd'));


//Operation Rooms Doctor and Patient
Route::get('/Operation',array('as'=>'ResOPRoom','uses'=>'OperationsController@index'));
Route::post('/Operation',array('uses' => 'OperationsController@Reserve'));

//View Bills And Print Patient Bills
Route::get('/Bill',array('as'=>'Bills','as'=>'PatientBill','uses'=>'BillsController@Main'));
Route::post('/Bill',array('uses'=>'BillsController@Result'));