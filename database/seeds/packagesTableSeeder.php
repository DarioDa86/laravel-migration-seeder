<?php

use Illuminate\Database\Seeder;
use App\Package;

class packagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newPackage = new Package();
        $newPackage->destination = "Marrakech";
        $newPackage->departures = "2021/11/27";
        $newPackage->duration = "14";
        $newPackage->price = "1200.00";
        $newPackage->name_company = "Bool-Tur";
        $newPackage->save();
    }
}
