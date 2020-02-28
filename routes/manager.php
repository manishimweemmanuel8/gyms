<?php

Route::group(['namespace' => 'Manager'], function() {
    Route::get('/', 'HomeController@index')->name('manager.dashboard');
    Route::get('/', 'HomeController@summarySalesReport')->name('manager.dashboard');
    Route::resource('/Entity', 'EntitiesController');
    Route::resource('/category', 'CategorieController');
    Route::resource('/sport', 'SportController');
    Route::resource('/membership', 'MembershipController');
    Route::resource('/price', 'PriceController');
    Route::get('dropdownlist','PriceController@index');
    Route::get('get-sport-list','PriceController@getSportList');
    Route::get('get-membership-list','PriceController@getMembershipList');
    Route::post('/uploadFile', 'EntitiesController@uploadFile');
    Route::get('/report/daily', 'managerReportController@dailySalesReport')->name('report.daily');
    Route::get('/report/summary', 'managerReportController@summarySalesReport')->name('report.summary');
    Route::get('/report/attendance', 'managerReportController@attendance')->name('report.attendance');
    Route::get('/report/{id}/delete','managerReportController@destroyAttendance')->name('report.destroy');

    //add new sport
    Route::get('/addsport/{id}/sport','EntitiesController@addNewSport')->name('sport.addSport');
    Route::post('/addSport/create','EntitiesController@storeNewSport')->name('sport.new');

    Route::post('/report/summaryBetween', 'managerReportController@betweenDateSalesReport')->name('report.between');

    //corporate customer

        //Product route

    Route::get('/corporate', 'corporateController@index')->name('corporate.index');
    Route::get('/corporate/{id}/edit','corporateController@edit')->name('corporate.edit');
    Route::get('/corporate/{id}/delete','corporateController@destroy')->name('corporate.destroy');
    Route::get('/corporate/create','corporateController@create')->name('corporate.create');
    Route::post('/corporate/create','corporateController@store')->name('corporate.store');
    Route::post('/corporate/update','corporateController@update')->name('corporate.update');


    Route::get('dropdownlist','EntitiesController@index');
    Route::get('get-sport-list','EntitiesController@getSportList');
    Route::get('get-membership-list','EntitiesController@getMembershipList');



    // Route::get('/Entity/{id}/approve','EntitiesController@approvePayment')->name('entity.approve');

    // Route::get('/', 'EntitiesController@message'); // localhost:8000/







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
