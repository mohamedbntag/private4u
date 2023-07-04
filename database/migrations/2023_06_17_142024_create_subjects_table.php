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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject');

            // references grade table
            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->string('grade');

            $table->string('price');
            $table->string('teacherpercentage');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
