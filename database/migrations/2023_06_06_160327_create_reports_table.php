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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // $table->integer('id_service');
            // $table->integer('id_status');
            // $table->integer('id_progression');

            $table->foreignId('id_service')->constrained(
                table: 'services', indexName: 'reports_id_services'
            );
            $table->foreignId('id_status_state')->constrained(
                table: 'status_states', indexName: 'reports_id_status_state'
            );
            $table->foreignId('id_progression')->constrained(
                table: 'progressions', indexName: 'reports_id_progression'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
