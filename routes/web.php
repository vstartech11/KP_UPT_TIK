<?php

use App\Http\Controllers\TemperatureController;
use Illuminate\Http\Request;

Route::post('/connect', function (Request $request) {
    $ipAddress = $request->input('ip_address');
    
    // Proses koneksi ke IP Address
    // Misalnya, Anda dapat menyimpan IP ini ke session atau log
    return redirect()->route('dashboard')->with('success', "Berhasil menghubungkan ke $ipAddress");
})->name('connect.ip');


Route::get('/', [TemperatureController::class, 'index'])->name('dashboard');
