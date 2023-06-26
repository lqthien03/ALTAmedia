<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('rule_progresstions', function (Blueprint $table) {
            $table->foreignId('id_service')->constrained(
                table: 'rule_progressions', indexName: 'rule_progression_id_service'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rule_progresstions', function (Blueprint $table) {
            //
        });
    }
};
