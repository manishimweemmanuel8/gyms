<?php

Route::group(['namespace' => 'Control'], function() {
    Route::get('/', 'HomeController@index')->name('control.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('control.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('control.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('control.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('control.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('control.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('control.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('control.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('control.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('control.verification.verify');

});