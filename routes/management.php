<?php

Route::group(['namespace' => 'Management'], function() {
    Route::get('/', 'HomeController@index')->name('management.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('management.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('management.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('management.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('management.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('management.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('management.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('management.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('management.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('management.verification.verify');

});