<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->boolean('ini_gift');

            $table->boolean('a1');
            $table->boolean('a2');

            $table->integer('pda1');
            $table->integer('pda2');
            $table->integer('pda3');
            $table->integer('pda4');
            $table->integer('pda5');


            $table->integer('tda1');
            $table->integer('tda2');
            $table->integer('tda3');
            $table->integer('tda4');
            $table->integer('tda5');

            $table->integer('sda'); //todo: To be changed to the sldier in the future
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions');
    }
}
