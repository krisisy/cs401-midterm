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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('teacher first name.');
            $table->string('last_name')->comment('teacher last name.');
            $table->string('email')->comment('email of the teacher.');
            $table->string('department')->max(10)->comment('department of the teacher.');
            $table->datetime('birthday')->comment('birthday of the teacher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('teachers');
    }
};
