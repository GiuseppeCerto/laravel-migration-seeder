<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder 

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $azienda  = ['Trenitalia', 'Italo'];

        for ($i = 0; $i < 100; $i++) {

            $new_train = new Train();
            $new_train->azienda = $faker->randomElement($azienda);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->numberBetween(1, 127);
            $new_train->numero_carrozze = $faker->numberBetween(1, 127);
            $new_train->in_orario = $faker->numberBetween(0, 1);
            $new_train->cancellato = $faker->numberBetween(0, 1);

            $new_train->save();
        }
    }
}
