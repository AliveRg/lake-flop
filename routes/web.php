<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageHomeController;
use App\Http\Controllers\UserController;





Route::get('/',[PageHomeController::class, 'welcome']);

Route::get('/user', [UserController::class, 'InfoUser']);
Route::get('/user/read', [UserController::class, 'Index']);
Route::get('/user/reformData', [UserController::class, 'Reform']);
Route::get('/user/create', [UserController::class,'Create']);
Route::get('/user/delete', [UserController::class,'Delete']);
Route::get('/user/first_or_create', [UserController::class,'FirstOrCreate']);
Route::get('/user/update_or_create', [UserController::class,'UpdateOrCreate']);


/*
    Раньше настройка маршрутов в контроллерах до 8х версии была такой:

    Route::get('/','PageHomeController@index');

    если прописывать не в контроллере, то это выглядит так:

    Route::get('/', function (){
        return (view('welcome'));
    });
*/
