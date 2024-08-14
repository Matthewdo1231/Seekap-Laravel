<?php

use App\Models\Joblisting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoblistingController;
use App\Http\Controllers\EmployerSiteController;

//Employer index
Route::get('/', [JoblistingController::class, 'index']);



//Employer index
Route::get('/employer', [EmployerSiteController::class, 'index']);

//Listing forms
Route::get('/employer/create/{form}', [EmployerSiteController::class, 'create']);

//Store Pending Form
Route::post('/create', [EmployerSiteController::class, 'store']);


