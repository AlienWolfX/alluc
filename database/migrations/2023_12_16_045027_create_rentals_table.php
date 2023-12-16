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
        Schema::create('rentals', function (Blueprint $table) {
            $table->bigIncrements('rental_id');
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->bigInteger('staff_id')->unsigned();
            $table->foreign('staff_id')->references('staff_id')->on('staff');
            $table->bigInteger('car_id')->unsigned();
            $table->foreign('car_id')->references('car_id')->on('cars');
            $table->date('rental_date');
            $table->timestamp('rental_time');
            $table->date('return_date');
            $table->timestamp('return_time');
            $table->string('rental_status', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
