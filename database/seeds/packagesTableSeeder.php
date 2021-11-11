<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class packagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++ ) {

            $newPackage = new Package();
            $newPackage->destination = $faker->city();
            $newPackage->departures = $faker->dateTime();
            $newPackage->duration = $faker->numberBetween(2, 90);
            $newPackage->price = $faker->randomFloat(2, 370, 7800);
            $newPackage->name_company = "Bool-Tur";
            $newPackage->save();
        } 
    }
}
