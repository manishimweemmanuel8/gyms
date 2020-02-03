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
Route::apiResource('/payment', 'ApiController');
Route::post('/logs', 'ApiController@login');
Route::post('/loginReceptionist', 'ApiController@loginReceptionist');
Route::post('/loginController', 'ApiController@loginController');
Route::post('/session','ApiController@session');
Route::put('/check','ApiController@show');
Route::get('/get','ApiController@getCustomer');
Route::get('categories', function() {
    return $categories=Categorie::all();
});
Route::get('sports', function() {
    return $sports=Sport::all();
});
Route::get('memberships', function() {
    return $memberships=Membership::all();
});


Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');
 
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'ApiController@logout');
 
    Route::get('user', 'ApiController@getAuthUser');
 
    Route::get('products', 'ProductController@index');
    Route::get('products/{id}', 'ProductController@show');
    Route::post('products', 'ProductController@store');
    Route::put('products/{id}', 'ProductController@update');
    Route::delete('products/{id}', 'ProductController@destroy'); 
});

