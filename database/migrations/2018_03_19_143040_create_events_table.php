<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'events', function (Blueprint $table) {
            $table->increments('id');
            $table->date('event_date');
            $table->time('event_time');
            $table->string('event_title');
            $table->text('event_descr');
            $table->text('intro_speech')->nullable();
            $table->string('ini_gift')->nullable();
            $table->string('q1');
            $table->string('q2');
            $table->text('problems_speech')->nullable();;
            $table->string('pdm1');
            $table->string('pdm2')->nullable();
            $table->string('pdm3')->nullable();
            $table->string('pdm4')->nullable();
            $table->string('pdm5')->nullable();
            $table->text('solutions_speech');
            $table->string('sdm1');
            $table->string('sdm2')->nullable();
            $table->string('sdm3')->nullable();
            $table->string('sdm4')->nullable();
            $table->string('sdm5')->nullable();
            $table->text('targets_speech');
            $table->string('tdm1');
            $table->string('tdm2')->nullable();
            $table->string('tdm3')->nullable();
            $table->string('tdm4')->nullable();
            $table->string('tdm5')->nullable();
            $table->boolean('funding_required')->nullable();
            $table->text('funding_descr')->nullable();
            $table->boolean('exclusion')->nullable();
            $table->text('exclusion_rule')->nullable();
            $table->text('preaching')->nullable();
            $table->text('voting_question');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            });
    }

    /**php
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
