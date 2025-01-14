<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'model' => 'Toyota Corolla',
            'price' => 20000,
            'mileage' => 15000,
            'engine' => '1.8L',
            'drivetrain' => 'FWD',
            'year' => 2022,
            'location' => 'New York',
        ]);
        Vehicle::create([
            'model' => 'Honda Accord',
            'price' => 25000,
            'mileage' => 12000,
            'engine' => '2.0L',
            'drivetrain' => 'AWD',
            'year' => 2023,
            'location' => 'Los Angeles',
        ]);
    }
}
