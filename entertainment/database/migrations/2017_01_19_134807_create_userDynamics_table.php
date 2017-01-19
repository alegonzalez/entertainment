<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDynamicsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('userDynamics', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_user');
      $table->integer('id_dynamic');
      $table->timestamps();
      $table->foreign('id_dynamic')
      ->references('id')
      ->on('dynamics');
      $table->foreign('id_user')
      ->references('id')
      ->on('users');
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
