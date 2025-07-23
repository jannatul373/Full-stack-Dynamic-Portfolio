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
        Schema::create('educations', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id');
            $table->string('type'); // e.g., SSC, HSC, BSc, MSc, etc.
            $table->string('name'); // Program name or degree title
            $table->string('institute'); // Name of institution
            $table->year('enrolled_year');
            $table->year('passing_year');
            $table->string('grade'); // Grade, CGPA, or percentage
            $table->timestamps(); // created_at and updated_at
        });
         Schema::table('educations', function (Blueprint $table) {
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
