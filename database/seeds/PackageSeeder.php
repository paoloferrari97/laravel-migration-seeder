<?php

use App\Package;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $package = new Package();

            $package->destinazione = $faker->countryCode();
            $package->prezzo = $faker->numberBetween(200, 5000);
            $package->giorni_permanenza = $faker->numberBetween(2, 28);
            $package->data_partenza = $faker->dateTime();

            $package->save();
        }
    }
}