<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name")->unique();
            $table->string("category");
            $table->string("photo");
            $table->string("price");
            $table->string("car_year");
            $table->string("car_gearbox");
            $table->string("car_engine");
            $table->string("car_engine_capacity");
            $table->string("car_doors");
            $table->string("car_seats");
            $table->string("description");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
