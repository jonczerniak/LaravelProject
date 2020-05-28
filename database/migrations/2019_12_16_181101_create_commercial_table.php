<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('businessName')->nullable();
            $table->string('facilityAddress')->nullable();
            $table->string('facilityCity')->nullable();
            $table->string('facilityState')->nullable();
            $table->integer('facilityZip')->nullable();
            $table->string('mailingAddress')->nullable();
            $table->string('mailingCity')->nullable();
            $table->string('mailingState')->nullable();
            $table->string('mailingZip')->nullable();
            $table->string('pointOfContact')->nullable();
            $table->string('contactTitle')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('avistaCustomer')->nullable();
            $table->string('avistaAccountNumber')->nullable();
            $table->integer('numberOfEmployees')->nullable();
            $table->integer('commutingEmployees')->nullable();
            $table->integer('numberOfFacilityPorts')->nullable();
            $table->integer('fleetLightDutyVehicles')->nullable();
            $table->boolean('interestAddingEvFleet')->nullable();
            $table->boolean('facilityWiFi')->nullable();
            $table->integer('distanceToPointsOfInterest')->nullable();
            $table->string('evBenefits')->nullable();
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
        Schema::dropIfExists('commercials');
    }
}
