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
        Schema::create('customer_infos', function (Blueprint $table) {
            $table->id();
            $table->string('emirates_id');
            $table->string('visa_type');
            $table->string('visa_from');
            $table->string('partner_visa_type');
            $table->boolean('have_guardian');
            $table->boolean('have_witness');
            $table->string('phone');
            $table->string('religion');
            $table->date('DOB');
            $table->string('nationality');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_infos');
    }
};
