<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('/intranetUser/{name}', 'IntranetUserController@findIntranetUserDetail');
Route::get('/equipmentType', 'EquipmentController@getEquipmentType');
Route::get('/equipment/{type}/{name?}', 'EquipmentController@searhEquipment');

Route::post('/computerForm/receive', 'ComputerFormController@saveComputerForm');
Route::put('/computerForm/receive', 'ComputerFormController@updateReceiveForm');

Route::group(['middleware' => ['web']], function () {
    //
});
