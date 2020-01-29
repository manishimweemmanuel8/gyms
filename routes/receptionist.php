<?php

Route::group(['namespace' => 'Receptionist'], function() {
    Route::get('/', 'HomeController@index')->name('receptionist.dashboard');
    // Route::resource('/customer', 'CustomerController');
    Route::resource('/payment', 'PaymentController');
    Route::resource('/session','SessionController');
    Route::get('/', 'CustomerController@index'); // localhost:8000/
    Route::post('/uploadFile', 'CustomerController@uploadFile');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('receptionist.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('receptionist.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('receptionist.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('receptionist.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('receptionist.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('receptionist.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('receptionist.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('receptionist.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('receptionist.verification.verify');
    Route::post('payment/store','PaymentController@store')->name('payment.store');
    Route::post('session/store','SessionController@store')->name('session.store');


});
