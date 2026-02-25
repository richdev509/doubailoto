<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'subject',
        'message',
        'status',
        'response',
        'responded_at'
    ];

    protected $casts = [
        'responded_at' => 'datetime'
    ];
}
