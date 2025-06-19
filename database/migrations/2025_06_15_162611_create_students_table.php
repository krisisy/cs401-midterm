<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('student first name.');
            $table->string('last_name')->comment('student last name.');
            $table->string('program')->comment('program of the student.');
            $table->string('enrollment_year')->max(4)->comment('year of enrollment.');
            $table->datetime('birthday')->comment('birthday of the student');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('students');
    }
};
