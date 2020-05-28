<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResForm extends Model
{
    //fields for the Residential form
    protected $fillable = [
        'customerNumber',
        'firstName',
        'lastName',
        'streetAddress',
        'cityInput',
        'stateInput',
        'zipCode',
        'phoneNumber',
        'email',
        'carYear',
        'carManufacturer',
        'carModel',
        'evCommuteRegularly',
        'employerName',
        'workplaceChargingAvail',
        'evParkingOvernight',
        'wifiConnection',
        'electricPanelLocation',
        'chargerLocation',
        'wallCeilingDescription',
        'plansToMove',
        'jobStatus'
    ];
}
