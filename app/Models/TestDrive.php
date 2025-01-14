<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestDrive extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'vehicle',
        'date',
        'time',
    ];
}
