<?php

use Illuminate\Database\Seeder;

class storagesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $letters = ["Abuela","Mesa","Cafetera","Disco","Celular","Pecera","Fruta","Juguete",
    "Carro","Bolso","Casco","Persona","Espada","Raton","Pato","Gato","Mariposa","Pez","Arbol","Flor","Perro",
    "Dormir","Tela","Anillo","Corona","Banquete","Orar","Palacio","Rey","Trono","Sol","Cama","Lavadora","Pelota","Tambor","Computadora","Comer","Jugar","Ver"];
    for ($i=0; $i < count($letters); $i++) {
      DB::table('storages')->insert([
        'description' => $letters[$i],
        'id_type_storage' => 1
      ]);
    }
    for ($i=0; $i < 100 ; $i++) {
      DB::table('storages')->insert([
        'description' => $i,
        'id_type_storage' => 2
      ]);
    }
  }
}
