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
        Schema::create('service', function (Blueprint $table) {
            $table->integer('id')->primary('key');
            $table->string('ma_service');
            $table->string('name_service');
            $table->text('mota');
            $table->string('id_status');
            $table->string('id_progression');
            // $table->foreign('status')
            // ->references('id')->on('status')
            // ->constrained()
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
