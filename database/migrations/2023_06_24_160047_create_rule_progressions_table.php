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
        Schema::create('rule_progressions', function (Blueprint $table) {
            $table->id();
            $table->integer('start_count')->nullable();
            $table->integer('end_count')->nullable();
            $table->integer('prefix')->nullable();
            $table->integer('surfix')->nullable();
            $table->tinyInteger('is_prefix');
            $table->tinyInteger('is_surfix');
            $table->tinyInteger('is_reset');

            $table->foreignId('id_progression')->constrained(
                table: 'progressions', indexName: 'rule_id_progression'
            );

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rule_progressions');
    }
};
