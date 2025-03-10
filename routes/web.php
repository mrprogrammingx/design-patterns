<?php

use App\Http\Controllers\Factory\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/factory', [PaymentController::class, 'pay']);