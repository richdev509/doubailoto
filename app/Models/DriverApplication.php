<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverApplication extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'phone',
        'has_whatsapp',
        'email',
        'address',
        'birth_date',
        'identity_number',
        'identity_photo',
        'motorcycle_model',
        'motorcycle_year',
        'motorcycle_plate',
        'motorcycle_photo',
        'license_photo',
        'has_smartphone',
        'status',
        'rejection_reason',
        'payment_completed',
        'payment_reference',
        'approved_at'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'has_smartphone' => 'boolean',
        'has_whatsapp' => 'boolean',
        'payment_completed' => 'boolean',
        'approved_at' => 'datetime'
    ];
}
