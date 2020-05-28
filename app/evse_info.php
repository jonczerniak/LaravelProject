<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evse_info extends Model
{
    //
    protected $fillable = [
        'make',
        'model',
        'year',
        'max_amps',
        'wifi_enabled',
        'cellular_capable',
        'intended_use',
        'mounting_type',
        'charging_level',
        'num_of_ports',
        'power_sharing_capable',
        'cable_length_ft'
    ];
}
