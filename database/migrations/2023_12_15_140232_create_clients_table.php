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
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('staff_id');
            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('admin_id')->on('admin');
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->integer('age');
            $table->string('email', 50)->unique();
            $table->string('password', 64); // Assuming password hashing using a strong algorithm
            $table->string('contact_number', 11);
            $table->string('profile_picture_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
