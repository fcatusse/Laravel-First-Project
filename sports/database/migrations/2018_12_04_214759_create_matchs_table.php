<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('meteo', ['sunny','cloudy','rainy','windy','stormy']);
            $table->integer('team1');
            $table->integer('team2');
            $table->integer('team1_goals');
            $table->integer('team1_faults');
            $table->integer('team2_goals');
            $table->integer('team2_faults');
            $table->integer('winner');
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
        Schema::dropIfExists('matchs');
    }
}
