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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained(
                table: 'users', indexName: 'settings_id_user'
            );
            $table->foreignId('id_role')->constrained(
                table: 'roles', indexName: 'setting_id_role'
            );
            $table->foreignId('id_status_activate')->constrained(
                table: 'status_activates', indexName: 'setting_id_status_activate'
            );
            $table->foreignId('id_device')->constrained(
                table: 'devices', indexName: 'setting_id_device'
            );
            $table->foreignId('id_supply')->constrained(
                table: 'supplys', indexName: 'setting_id_supply'
            );



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
