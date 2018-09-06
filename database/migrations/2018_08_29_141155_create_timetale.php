<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sun', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->integer('beforeClass');
          $table->integer('firstPeriod');
          $table->integer('secondPeriod');
          $table->integer('lunchtime');
          $table->integer('thirdPeriod');
          $table->integer('fourthPeriod');
          $table->integer('fifthPeriod');
          $table->integer('afterClass1');
          $table->integer('afterClass2');
        });

        Schema::create('Mon', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->integer('beforeClass');
          $table->integer('firstPeriod');
          $table->integer('secondPeriod');
          $table->integer('lunchtime');
          $table->integer('thirdPeriod');
          $table->integer('fourthPeriod');
          $table->integer('fifthPeriod');
          $table->integer('afterClass1');
          $table->integer('afterClass2');
        });

        Schema::create('Tues', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->integer('beforeClass');
          $table->integer('firstPeriod');
          $table->integer('secondPeriod');
          $table->integer('lunchtime');
          $table->integer('thirdPeriod');
          $table->integer('fourthPeriod');
          $table->integer('fifthPeriod');
          $table->integer('afterClass1');
          $table->integer('afterClass2');
        });

        Schema::create('Wed', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->integer('beforeClass');
          $table->integer('firstPeriod');
          $table->integer('secondPeriod');
          $table->integer('lunchtime');
          $table->integer('thirdPeriod');
          $table->integer('fourthPeriod');
          $table->integer('fifthPeriod');
          $table->integer('afterClass1');
          $table->integer('afterClass2');
        });

        Schema::create('Thurs', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->integer('beforeClass');
          $table->integer('firstPeriod');
          $table->integer('secondPeriod');
          $table->integer('lunchtime');
          $table->integer('thirdPeriod');
          $table->integer('fourthPeriod');
          $table->integer('fifthPeriod');
          $table->integer('afterClass1');
          $table->integer('afterClass2');
        });

        Schema::create('Fri', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->integer('beforeClass');
          $table->integer('firstPeriod');
          $table->integer('secondPeriod');
          $table->integer('lunchtime');
          $table->integer('thirdPeriod');
          $table->integer('fourthPeriod');
          $table->integer('fifthPeriod');
          $table->integer('afterClass1');
          $table->integer('afterClass2');
        });

        Schema::create('Sat', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->integer('beforeClass');
          $table->integer('firstPeriod');
          $table->integer('secondPeriod');
          $table->integer('lunchtime');
          $table->integer('thirdPeriod');
          $table->integer('fourthPeriod');
          $table->integer('fifthPeriod');
          $table->integer('afterClass1');
          $table->integer('afterClass2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sun');
        Schema::dropIfExists('Mon');
        Schema::dropIfExists('Tues');
        Schema::dropIfExists('Wed');
        Schema::dropIfExists('Thurs');
        Schema::dropIfExists('Fri');
        Schema::dropIfExists('Sat');
    }
}
