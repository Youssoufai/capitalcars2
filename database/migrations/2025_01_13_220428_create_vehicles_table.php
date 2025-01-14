<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED primary key
            $table->string('model');
            $table->decimal('price', 10, 2);
            $table->integer('mileage');
            $table->string('engine');
            $table->string('drivetrain');
            $table->year('year');
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
