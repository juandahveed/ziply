<?php

use Faker\Factory as Faker;

class ChildrenTableSeeder extends Seeder {
    
    public function run(){
        
        $faker = Faker::create();
        
        foreach(range(1,10) as $index){
            Children::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'birthday' => $faker->dateTime,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => 'Michigan',
                'zip' => $faker->postcode,
                'room_id' => '1',
                'barcode' => $faker->randomLetter(6),
                'created_at' => $faker->dateTimeThisDecade,
                'updated_at' => $faker->dateTimeThisDecade
            ]);
        }
    }
}