<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'model',
        'image',
        'price',
        'mileage',
        'drivetrain',
        'engine',
        'year',
        'dealer_name',
        'location',
        'description',
    ];
    public function testDrives()
    {
        return $this->hasMany(TestDrive::class);
    }
}
