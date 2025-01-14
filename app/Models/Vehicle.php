<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function testDrives()
    {
        return $this->hasMany(TestDrive::class);
    }
}
