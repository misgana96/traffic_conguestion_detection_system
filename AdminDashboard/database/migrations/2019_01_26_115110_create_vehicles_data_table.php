<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles_data', function (Blueprint $table) {
            $table->increments('id');
            $table->date('created_at');
            $table->string('Total_vehicle_count');
            $table->string('period');
            $table->timestamp('Vehicle_count_down');
            $table->string('Vehicle_count_up');
            $table->string('camera_IP');
            $table->string('camera_location');
            $table->string('video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
