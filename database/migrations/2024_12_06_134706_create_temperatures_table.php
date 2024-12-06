<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('temperatures', function (Blueprint $table) {
        $table->id();
        $table->float('room_temperature'); // Suhu ruangan
        $table->float('rack_temperature'); // Suhu rak server
        $table->float('fan_speed_1'); // Kecepatan kipas 1
        $table->float('fan_speed_2'); // Kecepatan kipas 2
        $table->timestamp('measured_at'); // Waktu pengukuran
        $table->timestamps(); // Created_at & Updated_at
    });
}




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temperatures');
    }

    
};
