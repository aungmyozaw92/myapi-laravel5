<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Vehicle;

use Faker\Factory as Faker;

class VehiclesSeed extends Seeder
{
   
    public function run()
    {
    	$faker = Faker::create();

        for( $i=0; $i < 30 ; $i++){
            Vehicle::create
            ([
                'color' => $faker->safeColorName(),
                'maker_id' => $faker->numberBetween(1,5),
                'capacity' => $faker->randomFloat(),
                'speed' => $faker->randomFloat(),
                'power' => $faker->randomNumber()
            ]);
        }
    }
}
