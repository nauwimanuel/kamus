<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api'], function ($router) { 

    Route::prefix('auth')->group(function() {
        Route::post('register', 'RegisterController@register');    
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
    });
    
    Route::apiResource('beser', 'BeserController');

    Route::post('beser/search', 'BeserController@search');

});
