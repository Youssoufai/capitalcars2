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
            $table->string('condition');
            $table->string('transmission');
            $table->string('bodytype');
            $table->longText('image')->nullable();
            $table->decimal('price',);
            $table->string('mileage');
            $table->string('engine');
            $table->string('dealer_name');
            $table->string('drivetrain');
            $table->string('description');
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
