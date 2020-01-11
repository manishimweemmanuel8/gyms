<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Customer;

Route::get('/', function () {
    return view('welcome');

     

});

Route::resource('/receptionist/customer', 'CustomerController');
Route::resource('/receptionist/payment', 'PaymentController');
Route::resource('/report/report', 'reportController');
Route::resource('/controller/attendance', 'AttendanceController');
//Route::resource('/controller/attendance', 'AttendanceController@delete');
Route::resource('/manager/entity', 'EntityPaymentController');
Route::get('dropdownlist','PaymentController@index');
Route::get('get-sport-list','PaymentController@getSportList');
Route::get('get-membership-list','PaymentController@getMembershipList');
Route::get('gym_session_adult','reportController@gymSessionAdult');
// Route::get('dropdownlist','EntityPaymentController@index');
// Route::get('get-membership-list','EntityPaymentController@getMembershipList');


// Route::get('dropdownlists','AttendanceController@index');
// Route::get('get-sports-list','AttendanceController@getSportList');
// Route::get('get-memberships-list','AttendanceController@getMembershipList');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


