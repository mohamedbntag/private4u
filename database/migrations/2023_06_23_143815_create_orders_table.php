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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('Governorate');
            $table->string('Region');
            $table->string('subject');
            $table->string('grade');
            $table->string('ordercode');
            $table->string('teachercode');
            $table->foreign('teachercode')->references('teachercode')->on('teachers');  
            $table->unsignedBigInteger('orderstate_id');          
            $table->foreign('orderstate_id')->references('id')->on('order_states');
            $table->unsignedBigInteger('governorate_id');          
            $table->foreign('governorate_id')->references('id')->on('governorates');
            $table->unsignedBigInteger('region_id');          
            $table->foreign('region_id')->references('id')->on('regions');            
            $table->string('teachergender');
            $table->unsignedBigInteger('teacherworkplace_id');          
            $table->foreign('teacherworkplace_id')->references('id')->on('teacher_work_places');            
            $table->string('teacherrate');
            $table->date('date');
            $table->time('time');
            $table->text('notes');
            $table->unsignedBigInteger('price_id');          
            $table->foreign('price_id')->references('id')->on('prices');    
            $table->unsignedBigInteger('payment_id');          
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
