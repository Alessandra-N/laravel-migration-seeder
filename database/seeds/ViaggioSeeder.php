<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Viaggio;

class ViaggioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $viaggio = new Viaggio();
            $viaggio->destinazione = $faker->city();
            $viaggio->img = $faker->imageUrl(360, 360, 'houses', true);
            $viaggio->hotel = $faker->company();
            $viaggio->valutazione = $faker->numberBetween(1, 10);
            $viaggio->prezzo = $faker->numberBetween(30, 200);
            $viaggio->descrizione = $faker->words(30, true);
            $viaggio->save();
        }
        

    }
}
