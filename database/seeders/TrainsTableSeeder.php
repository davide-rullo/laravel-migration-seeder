<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();

            $train->azienda = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('?????-#####');
            $train->numero_carrozze = $faker->numberBetween(0, 10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
        }
    }
}
