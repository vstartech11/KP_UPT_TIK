<?php

use App\Models\Temperature;
use Illuminate\Http\Request;

Route::post('/temperature', function (Request $request) {
    Temperature::create([
        'value' => $request->value,
        'measured_at' => $request->measured_at,
    ]);

    return response()->json(['message' => 'Data saved successfully']);
});
