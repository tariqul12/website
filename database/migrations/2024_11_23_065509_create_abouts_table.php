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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();           
            $table->string("title")->nullable();
            $table->string("sub_title")->nullable();
            $table->text("image")->nullable();
            $table->string("broadband_customer")->nullable();
            $table->string("service_award")->nullable();
            $table->string("call_centre")->nullable();
            $table->string("helping_customer")->nullable();
            $table->string("future_title")->nullable();
            $table->string("future_sub_title")->nullable();
            $table->text("future_image")->nullable();
            $table->string("customer_satisfaction")->nullable();
            $table->text("customer_satisfaction_image")->nullable();
            $table->string("trustpilot_image_title")->nullable();
            $table->string("trustpilot_image_sub_title")->nullable();
            $table->text("trustpilot_image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
