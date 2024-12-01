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
        Schema::create('pakages', function (Blueprint $table) {
            $table->id();            
            $table->string("title")->nullable();
            $table->string("sub_title")->nullable();
            $table->string("speed")->nullable();
            $table->string("up_speed")->nullable();
            $table->string("dw_speed")->nullable();
            $table->string("price")->nullable();
            $table->string("description")->nullable();
            $table->string("additional")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakages');
    }
};
