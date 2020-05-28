<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_forms', function (Blueprint $table) { $table->bigIncrements('id');
            $table->string('customerNumber')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('streetAddress')->nullable();
            $table->string('cityInput')->nullable();
            $table->string('stateInput')->nullable();
            $table->integer('zipCode')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email')->nullable();
            $table->integer('carYear')->nullable();
            $table->string('carManufacturer')->nullable();
            $table->string('carModel')->nullable();
            $table->string('evCommuteRegularly')->nullable();
            $table->string('employerName')->nullable();
            $table->string('workplaceChargingAvail')->nullable();
            $table->string('evParkingOvernight')->nullable();
            $table->string('wifiConnection')->nullable();
            $table->string('electricPanelLocation')->nullable();
            $table->string('chargerLocation')->nullable();
            $table->string('wallCeilingDescription')->nullable();
            $table->string('plansToMove')->nullable();
            $table->string('jobStatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('res_forms');
    }
}
