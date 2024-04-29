<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestApiExampleController;

Route::get('/employees', [RestApiExampleController::class, 'getAllEmployees']);
