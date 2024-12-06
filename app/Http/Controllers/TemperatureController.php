<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function index()
    {
        $temperatures = Temperature::orderBy('measured_at', 'desc')->get();
        return view('temperatures.dashboard', compact('temperatures'));
    }
}
