<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'serial_number',
        'package_type',
        'price',
        'time_estimate'
    ];
}