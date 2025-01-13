<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcs/{number1}/{operator}/{number2}', [CalcController::class, 'calcs']);
