<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('students', \App\Http\Controllers\StudentController::class);
