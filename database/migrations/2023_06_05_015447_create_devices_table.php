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
            // $table->integer('id_option');
            // $table->integer('id_status');

            $table->foreignId('id_user')->constrained(
                table: 'users', indexName: 'devices_id_user'
            );
            $table->foreignId('id_option')->constrained(
                table: 'options', indexName: 'devices_id_option'
            );
            $table->foreignId('id_status')->constrained(
                table: 'statuses', indexName: 'devices_id_status'
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
