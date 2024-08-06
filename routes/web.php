<?php

use App\Models\Joblisting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoblistingController;

Route::get('/', [JoblistingController::class, 'index']);
