<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;

Route::view('/' , 'index');

Route::name('check.')->prefix('check')->group(function(){
    Route::post('/check' , [CheckController::class,'index']) -> name('index'); 
    Route::post('/check' , [CheckController::class, 'register']) -> name('register');
    Route::post('/check' , [CheckController::class, 'login']) -> name('login'); 
});