<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Observer\UserController;
use App\Http\Controllers\Factory\PaymentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/factory', [PaymentController::class, 'pay']);
Route::get('/observer', [UserController::class, 'observe']);
Route::get('/observer/delete', [UserController::class, 'delete']);
Route::get('/observer/update', [UserController::class, 'update']);
Route::get('/observer/activityLog', [UserController::class, 'allActivityLog']);