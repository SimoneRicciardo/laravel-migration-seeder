<?php

use App\train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for ($i=0; $i<20; $i++) {
            $newTrain = new train();
            $newTrain->azienda = $faker->sentence(2);
            $newTrain->stazione_partenza = $faker->sentence(2);
            $newTrain->stazione_arrivo = $faker->sentence(2);
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->ct = $faker->randomNumber(4, true);
            $newTrain->nc = $faker->randomNumber(2, true);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
