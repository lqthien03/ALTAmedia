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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('ma_service');
            $table->string('name_service');
            $table->text('mota');
            // $table->string('id_status');
            $table->foreignId('id_status')->constrained(
                table: 'statuses', indexName: 'services_id_status'
            );
            // $table->string('id_progression');
            $table->foreignId('id_progression')->constrained(
                table: 'progressions', indexName: 'services_id_progression'
            );
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
