<?php

use App\Http\Controllers\TemperatureController;

Route::get('/', [TemperatureController::class, 'index']);
