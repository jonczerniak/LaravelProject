<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    //
    protected $fillable = [
        'businessName',
        'facilityAddress',
        'facilityCity',
        'facilityState',
        'facilityZip',
        'mailingAddress',
        'mailingCity',
        'mailingState',
        'mailingZip',
        'pointOfContact',
        'contactTitle',
        'email',
        'phoneNumber',
        'avistaCustomer',
        'avistaAccountNumber',
        'numberOfEmployees',
        'commutingEmployees',
        'numberOfFacilityPorts',
        'fleetLightDutyVehicles',
        'interestAddingEvFleet',
        'facilityWiFi',
        'distanceToPointsOfInterest',
        'evBenefits',
        'jobStatus'
    ];
}
