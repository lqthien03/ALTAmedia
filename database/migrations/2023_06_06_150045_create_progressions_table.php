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
        Schema::create('progressions', function (Blueprint $table) {
            $table->id();
            $table->string('stt');
            $table->dateTime('time_cap');
            $table->dateTime('time_sudung');

            $table->foreignId('id_supply')->constrained(
                table: 'supplys', indexName: 'progressions_id_supply'
            );
            $table->foreignId('id_user')->constrained(
                table: 'users', indexName: 'progressions_id_user'
            );
            $table->foreignId('id_option')->constrained(
                table: 'options', indexName: 'progressions_id_option'
            );

            // $table->foreignId('id_service')->constrained(
            //     table: 'services', indexName: 'progressions_id_service'
            // );

            // $table->foreignId('id_status_state')->constrained(
            //     table: 'status_states', indexName: 'progressions_id_status_state'
            // );
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progressions');
    }
};
