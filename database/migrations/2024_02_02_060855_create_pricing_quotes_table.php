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
        Schema::create('pricing_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('service_type');
            $table->decimal('professional_fee', 15, 2);
            $table->decimal('govt_fee', 15, 2);
            $table->unsignedBigInteger('requested_id');
            $table->foreign('requested_id')->references('id')->on('application_requests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_quotes');
    }
};
