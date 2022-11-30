<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    //tabella ponte player_team 
    {
        Schema::create('player_team', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');//mi prendo l'intero dell'id player che andra in relazione con gli id di team
            $table->unsignedBigInteger('team_id');//intero di team che andra in relazione con gli id di player
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');//foreign e una chiave,quindi player_id si riferisce a players
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_team');
    }
};
