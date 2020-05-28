<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residential_Job extends Model
{
    //laravel looking for "residential__jobs"
    //manually set the table name to look for
    public $table = 'residential_jobs';

    protected $fillable = [
        'customer_id',
        'afm-transformer',
        'afm_fransform_kva',
        'recommend_kva',
        'summer_load',
        'winter_load',
        'application_date',
        'sent_to_contractor',
        'install_date',
        'unit_serial_number',
        'invoice_number',
        'greenlots_ID',
        'avista_reimbursment',
        'avista_cost',
        'customer_cost',
        'walls_penetrated',
        'route_distance_ft',
        'avg_cost',
        'submitted_to_archiving',
        'post_install_survey_date',
        'invite_to_FB_group_date',
        'withdraw_date',
        'withdraw_reason',
        'latitude',
        'longitude',
        'service_point_id',
        'tracking_notes',
        'evse_manufacturer',
        'contractor_id',
        'evse_installed_id',
        'is_return_visit',
        'job_type'
    ];
}
