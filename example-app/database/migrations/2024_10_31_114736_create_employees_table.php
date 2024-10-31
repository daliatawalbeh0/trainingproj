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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Employee name
            $table->string('email')->unique(); // Employee email (unique)
            $table->string('phone'); // Phone number
            $table->string('position'); // Job position
            $table->decimal('salary', 8, 2); // Salary with two decimal places
            $table->date('hire_date'); // Date of hiring
            $table->timestamps(); // Created at and updated at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
