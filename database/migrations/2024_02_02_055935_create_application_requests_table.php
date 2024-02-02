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
        Schema::create('application_requests', function (Blueprint $table) {
            $table->id();
            $table->date('appointment_date');
            $table->string('document_status');
            $table->time('appointment_time');
            $table->date('requested_date');
            $table->string('status');
            $table->string('img_signed_doc')->nullable();
            $table->string('pricing_request')->nullable();
            $table->string('payment_status')->nullable();
            $table->unsignedBigInteger('customer_info_id');
            $table->foreign('customer_info_id')->references('id')->on('customer_infos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_requests');
    }
};
