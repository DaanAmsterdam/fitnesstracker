<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('user_id');
            $table->string('title');
            $table->date('date');
            $table->string('distance');
            $table->string('duration');
            $table->string('type');
            $table->string('weather')->nullable();
            $table->string('link_strava')->nullable();
            $table->string('link_garmin')->nullable();
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('rides');
    }
}
