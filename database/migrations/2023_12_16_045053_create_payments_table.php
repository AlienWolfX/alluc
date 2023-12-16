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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->bigInteger('rental_id')->unsigned();
            $table->foreign('rental_id')->references('rental_id')->on('rentals');
            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->float('payment_amount', 2);
            $table->float('add_charges', 2);
            $table->date('payment_date')->default(now());
            $table->timestamp('payment_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
