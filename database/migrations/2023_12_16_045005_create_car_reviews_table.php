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
        Schema::create('car_reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id');
            $table->bigInteger('car_id')->unsigned();
            $table->foreign('car_id')->references('car_id')->on('cars');
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->float('review_score');
            $table->date('date_review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_reviews');
    }
};
