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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('ma_device');
            $table->string('name_device');
            $table->string('address_ip');
            $table->string('device_sd');
            $table->foreignId('id_user')->constrained(
                table: 'users', indexName: 'devices_id_user'
            );
            $table->foreignId('id_option')->constrained(
                table: 'options', indexName: 'devices_id_option'
            );
            $table->foreignId('id_status_activate')->constrained(
                table: 'status_activates', indexName: 'devices_id_status_activate'
            );
            $table->foreignId('id_status_connect')->constrained(
                table: 'status_connects', indexName: 'devices_id_status_connect'
            );
            $table->foreignId('id_option_device')->constrained(
                table: 'option_devices', indexName: 'devices_id_option_device'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
