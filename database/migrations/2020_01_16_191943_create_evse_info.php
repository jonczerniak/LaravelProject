<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvseInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evse_infos', function (Blueprint $table) {
            $table->bigIncrements('evse_id');
            $table->String('make')->nullable();
            $table->String('model')->nullable();
            $table->integer('year')->nullable();
            $table->Double('max_amps')->nullable();
            $table->String('wifi_enabled')->nullable();
            $table->String('cellular_capable')->nullable();
            $table->String('intended_use')->nullable();
            $table->String('mounting_type')->nullable();
            $table->integer('charging_level')->nullable();
            $table->integer('num_of_ports')->nullable();
            $table->String('power_sharing_capable')->nullable();
            $table->integer('cable_length_ft')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evse_infos');
    }
}
