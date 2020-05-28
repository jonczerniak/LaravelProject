<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'contractor_type',
        'phone_number',
        'email',
        'company_name',
        'alternate_contact',
        'alternate_phone',
        'alternate_email'
    ];
}
