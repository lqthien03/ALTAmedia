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
            $table->id();
            $table->string('stt');
            $table->string('name_user');
            $table->string('name_service');
            $table->dateTime('time_cap');
            $table->dateTime('time_sudung');
            $table->string('status_tinhtrang');
            $table->string('nguoncap');
            $table->string('sdt');
            $table->string('email');
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
