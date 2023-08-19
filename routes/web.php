<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'index']);
Route::post('/validate', [UserController::class, 'userForm'])->name('empty-validate.form');