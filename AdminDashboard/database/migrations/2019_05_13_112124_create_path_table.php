<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Starting');
            $table->string('camera_position');
            $table->string('Destination');
            #$table->string('total_count');
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
        #Schema::dropIfExists('path');
    }
}
