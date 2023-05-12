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

    // seeds with faker
    // for ($i = 0; $i < 100; $i++) {
    //   $newTrain = new Train();

    //   $newTrain->azienda = $faker->words(2, true);
    //   $newTrain->stazione_partenza = $faker->city();
    //   $newTrain->stazione_arrivo = $faker->city();
    //   $newTrain->orario_partenza = $faker->dateTimeInInterval('-1 day', '+3 days');
    //   $newTrain->orario_arrivo = $newTrain->orario_partenza;
    //   $newTrain->codice_treno = $faker->numberBetween(100000, 999999);
    //   $newTrain->numero_carrozze = $faker->numberBetween(3, 20);
    //   $newTrain->in_orario = $faker->boolean();
    //   $newTrain->cancellato = $faker->boolean();

    //   $newTrain->save();
    // }


    // seeds from file
    $trainFile = fopen(__DIR__ . '/../trains.csv', 'r');
    // dd($trainFile);
    $trainCSV = fgetcsv($trainFile);

    // salto la prima riga
    $trainCSV = fgetcsv($trainFile);

    // dd($trainCSV);

    while ($trainCSV != false) {
      $newTrain = new Train();

      $newTrain->azienda = $trainCSV[0];
      $newTrain->stazione_partenza = $trainCSV[1];
      $newTrain->stazione_arrivo = $trainCSV[2];
      $newTrain->orario_partenza = $trainCSV[3];
      $newTrain->orario_arrivo = $trainCSV[4];
      $newTrain->codice_treno = $trainCSV[5];
      $newTrain->numero_carrozze = $trainCSV[6];
      $newTrain->in_orario = $trainCSV[7];
      $newTrain->cancellato = $trainCSV[8];

      $newTrain->save();

      // passo alla prossima riga
      $trainCSV = fgetcsv($trainFile);
    }
  }
}
