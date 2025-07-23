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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id');
            $table->text('description')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('department')->nullable();
            $table->integer('age')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps(); // created_at and updated_at
        });
        Schema::table('personal_details', function (Blueprint $table) {
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         });
    }
   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};
