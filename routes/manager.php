<?php

Route::group(['namespace' => 'Manager'], function() {
    Route::get('/', 'HomeController@index')->name('manager.dashboard');

    //Corporate

    Route::get('/corporate', 'CorporateController@index')->name('corporate.index');
    Route::get('/corporate/{id}/edit','CorporateController@edit')->name('corporate.edit');
    Route::get('/corporate/{id}/delete','CorporateController@destroy')->name('corporate.destroy');
    Route::get('/corporate/create','CorporateController@create')->name('corporate.create');
    Route::post('/corporate/create','CorporateController@store')->name('corporate.store');
    Route::post('/corporate/update','CorporateController@update')->name('corporate.update');

    //Payment

    Route::get('/payment', 'PaymentCorporateController@index')->name('payment.index');
    Route::get('/payment/{id}/edit','PaymentCorporateController@edit')->name('payment.edit');
    Route::get('/payment/{id}/delete','PaymentCorporateController@destroy')->name('payment.destroy');
    Route::get('/payment/create','PaymentCorporateController@create')->name('payment.create');
    Route::post('/payment/create','PaymentCorporateController@store')->name('payment.store');
    Route::post('/payment/update','PaymentCorporateController@update')->name('payment.update');

     //customer information
    Route::get('/customer', 'CorporateCustomerController@index')->name('customer.index');
    Route::post('/uploadFile', 'CorporateCustomerController@uploadFile');
    Route::get('/customer/{id}/edit','CorporateCustomerController@edit')->name('customer.edit');
    Route::get('/customer/{id}/delete','CorporateCustomerController@destroy')->name('customer.destroy');
    Route::get('/customer/create','CorporateCustomerController@create')->name('customer.create');
    Route::post('/customer/create','CorporateCustomerController@store')->name('customer.store');
    Route::post('/customer/update','CorporateCustomerController@update')->name('customer.update');


    //subscription

    Route::get('/subscription', 'SubscriptionController@index')->name('subscription.index');
    Route::get('/subscription/{id}/edit','SubscriptionController@edit')->name('subscription.edit');
    Route::get('/subscription/{id}/delete','SubscriptionController@destroy')->name('subscription.destroy');
    Route::get('/subscription/create','SubscriptionController@create')->name('subscription.create');
    Route::post('/subscription/create','SubscriptionController@store')->name('subscription.store');
    Route::post('/subscription/update','SubscriptionController@update')->name('subscription.update');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('manager.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('manager.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('manager.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('manager.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('manager.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('manager.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('manager.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('manager.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('manager.verification.verify');

});