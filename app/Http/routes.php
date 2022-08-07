<?php

Route::group(['prexfix' => 'api/vi'], function() {
    Route::resource('meeting', 'MeetingController', [
        'except' => ['edit', 'create']
    ]);
    
    Route::resource('meeting/registration', 'RegistrationController', [
        'only' => ['store', 'destroy']
    ]);
    
    Route::post('user', [
        'uses' => 'AuthcController@store'
    ]);
    
    Route::post('user/signin', [
        'uses' => 'AuthcController@signin'
    ]);
});

