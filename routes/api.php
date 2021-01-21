<?php

// public api routes

// Routes for authenticated users
Route::group(['middleware' => ['auth:api']], function () {

//    Route::post('login', 'AuthController@login');
//    Route::post('logout', 'AuthController@logout');
//    Route::post('refresh', 'AuthController@refresh');
//    Route::post('me', 'AuthController@me');

});

// Routes for guest only
Route::group(['middleware' => ['guest:api']], function () {

    Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
//    Route::post('login', 'AuthController@login');
//    Route::post('logout', 'AuthController@logout');
//    Route::post('refresh', 'AuthController@refresh');
//    Route::post('me', 'AuthController@me');

});