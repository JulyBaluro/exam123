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
        Schema::create('roomexams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('room_name');
            $table->unsignedInteger('room_number');
            $table->string('condition');
            $table->string('room_floor');
            $table->string('room_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomexams');
    }
};
