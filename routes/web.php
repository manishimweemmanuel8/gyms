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
    return view('/receptionist/auth/login');

     

});
Route::get('/receptionist/payment', 'PaymentController@index');
Route::get('/receptionist/payment/create', 'PaymentController@create');

Route::resource('/receptionist/customer', 'CustomerController');
//Route::resource('/receptionist/payment', 'PaymentController');
Route::resource('/report/report', 'reportController');
Route::resource('/controller/attendance', 'AttendanceController');
//Route::resource('/controller/attendance', 'AttendanceController@delete');
Route::resource('/manager/entity', 'EntityPaymentController');
Route::get('dropdownlist','PaymentController@index');
Route::get('get-sport-list','PaymentController@getSportList');
Route::get('get-membership-list','PaymentController@getMembershipList');
Route::get('gym_session_adult','reportController@gymSessionAdult');

//Route::get('dropdownlist','PriceController@index');
//Route::get('get-sport-list','PriceController@getSportList');
//Route::get('get-membership-list','PriceController@getMembershipList');


//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});
Route::get('csv_file', 'CsvFile@index');

Route::post('csv_file/import', 'CsvFile@csv_import')->name('import');

