<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'service_details',
    ];

    protected $casts = [
        'service_details' => 'array',
    ];
}
