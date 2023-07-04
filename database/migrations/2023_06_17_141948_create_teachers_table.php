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
            /*$table->unsignedBigInteger('user_id');
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // referneces Governorate table
            $table->unsignedBigInteger('governorate_id');
            $table->foreign('governorate_id')->references('id')->on('governorates')->onDelete('cascade');
            $table->string('governorate');

            // referneces nationality table
            $table->unsignedBigInteger('nationality_id');
            $table->foreign('nationality_id')->references('id')->on('Nationalities')->onDelete('cascade');
            $table->string(' nationality');

            //$table->string('address');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('state');

            $table->unsignedBigInteger('teacherworkplace_id');
            $table->foreign('teacherworkplace_id')->references('id')->on('teacherworkplaces')->onDelete('cascade');
            $table->string('teacherworkplace');

            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->string('grade');*/

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
