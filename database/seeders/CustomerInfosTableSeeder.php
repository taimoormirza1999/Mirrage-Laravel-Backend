<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('customer_infos')->insert([
                'emirates_id' => $faker->unique()->numerify('##############'),
                'visa_type' => "Resident",
                'visa_from' => $faker->country,
                'partner_visa_type' => "Resident",
                'have_guardian' => $faker->boolean,
                'have_witness' => $faker->boolean,
                'phone' => $faker->phoneNumber,
                'religion' => "Islam",
                'DOB' => $faker->date,
                'nationality' => $faker->country,
                'user_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
