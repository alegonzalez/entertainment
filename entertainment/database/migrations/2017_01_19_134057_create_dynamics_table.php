<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDynamicsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('dynamics', function (Blueprint $table) {
      $table->increments('id');
      $table->string('description');
      $table->integer('id_tipo');
      $table->timestamps();
      $table->foreign('id_tipo')
      ->references('id')
      ->on('typeDynamics');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('dynamics');
  }
}
