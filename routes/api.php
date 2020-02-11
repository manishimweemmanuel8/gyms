<?php

use Illuminate\Http\Request;
use App\Categorie;
use App\Sport;
use App\Membership;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::apiResource('/payment', 'ApiController');
Route::post('/loginReceptionist', 'ApiController@loginReceptionist');
Route::post('/loginController', 'ApiController@loginController');
Route::post('/session','ApiSession@session');
Route::put('/check','ApiController@show');
Route::get('/get','ApiSubscribe@getCustomer');
Route::get('categories', function() {
    return $categories=Categorie::all();
});



Route::get('/sports','ApiController@sports');
Route::get('/memberships','ApiController@memberships');

//corporate

Route::get('entities', function() {
    return $entities=DB::table('entities')->get();
});

Route::get('/corporateEntitie' , 'apicorporate@customer');
Route::get('/corporateSport' , 'apicorporate@sport');
Route::post('/corporate' , 'apicorporate@corporateCustomer');


//committed

Route::get('committed', function() {
    return $committed=DB::table('commiteds')->get();
});
Route::get('/committedSport' , 'apicommitted@sport');
Route::post('/committed', 'apicommitted@committedCustomer');






