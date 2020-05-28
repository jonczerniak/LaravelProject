<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResidentialJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residential_jobs', function (Blueprint $table) {
            $table->bigIncrements('jobID');
            $table->string('customer_id')->nullable();
            $table->string('afm-transformer')->nullable();
            $table->double('afm_fransform_kva')->nullable();
            $table->double('recommend_kva')->nullable();
            $table->double('summer_load')->nullable();
            $table->double('winter_load')->nullable();
            $table->date('application_date')->nullable();
            $table->date('sent_to_contractor')->nullable();
            $table->date('install_date')->nullable();
            $table->string('unit_serial_number')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('greenlots_ID')->nullable();
            $table->double('avista_reimbursment')->nullable();
            $table->double('avista_cost')->nullable();
            $table->double('customer_cost')->nullable();
            $table->string('walls_penetrated')->nullable();
            $table->string('route_distance_ft')->nullable();
            $table->double('avg_cost')->nullable();
            $table->date('submitted_to_archiving')->nullable();
            $table->date('post_install_survey_date')->nullable();
            $table->date('invite_to_FB_group_date')->nullable();
            $table->date('withdraw_date')->nullable();
            $table->string('withdraw_reason')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('service_point_id')->nullable();
            $table->string('tracking_notes')->nullable();
            $table->string('evse_manufacturer')->nullable();
            $table->string('contractor_id')->nullable();
            $table->integer('evse_installed_id')->nullable();
            $table->string('is_return_visit')->nullable();
            $table->string('job_type')->nullable();
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
        Schema::dropIfExists('residential_jobs');
    }
}
