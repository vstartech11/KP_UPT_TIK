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
        $table->float('value'); // Untuk nilai suhu
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
