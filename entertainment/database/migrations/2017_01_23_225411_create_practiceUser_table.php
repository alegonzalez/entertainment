<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeUserTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('practiceUser', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_user')->unsigned();
      $table->integer('id_storage')->unsigned();
      $table->integer('id_practice')->unsigned();
      $table->timestamps();
      //foeingn key of user
      $table->foreign('id_user')
      ->references('id')
      ->on('users');
      //foreign key of the table storage
      $table->foreign('id_storage')
      ->references('id')
      ->on('storages');
      //foreign key of the table practice
      $table->foreign('id_practice')
      ->references('id')
      ->on('practices');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('practiceUser');
  }
}
