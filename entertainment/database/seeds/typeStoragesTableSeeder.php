<?php

use Illuminate\Database\Seeder;

class typeStoragesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('typeStorages')->insert([
      'description' => "P",
    ]);
    DB::table('typeStorages')->insert([
      'description' => "N",
    ]);
    DB::table('typeStorages')->insert([
      'description' => "S",
    ]);
  }
}
