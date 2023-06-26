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
        Schema::table('rule_progressions', function (Blueprint $table) {
            $table->dropForeign('rule_id_progression');
            $table->dropColumn('id_progression');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rule_progressions', function (Blueprint $table) {
            //
        });
    }
};
