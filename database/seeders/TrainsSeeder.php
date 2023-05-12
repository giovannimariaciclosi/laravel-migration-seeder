<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    for ($i = 0; $i < 100; $i++) {
      $newTrain = new Train();

      $newTrain->azienda = $faker->words(2, true);
      $newTrain->stazione_partenza = $faker->city();
      $newTrain->stazione_arrivo = $faker->city();
      $newTrain->orario_partenza = $faker->dateTimeInInterval('-1 day', '+3 days');
      $newTrain->orario_arrivo = $newTrain->orario_partenza;
      $newTrain->codice_treno = $faker->numberBetween(100000, 999999);
      $newTrain->numero_carrozze = $faker->numberBetween(3, 20);
      $newTrain->in_orario = $faker->boolean();
      $newTrain->cancellato = $faker->boolean();

      $newTrain->save();
    }
  }
}
