<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware('api')->prefix('api/sso')->group(function () {
    Route::post('login', 'Dolpox\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'Dolpox\LaravelSSO\Controllers\ServerController@logout');
    Route::get('attach', 'Dolpox\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'Dolpox\LaravelSSO\Controllers\ServerController@userInfo');
});
