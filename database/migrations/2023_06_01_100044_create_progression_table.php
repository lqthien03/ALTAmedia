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
        Schema::create('progression', function (Blueprint $table) {
            $table->integer('id')->primary('key');
            $table->string('stt');
            $table->dateTime('time_cap');
            $table->dateTime('time_sudung');
            $table->string('nguoncap');
            $table->integer('id_user');
            $table->integer('id_service');
            $table->integer('id_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progression');
    }
};
