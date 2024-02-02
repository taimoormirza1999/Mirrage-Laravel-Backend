<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ApplicationRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('application_requests')->insert([
                'appointment_date' => $faker->date,
                'document_status' => $faker->word,
                'appointment_time' => $faker->time,
                'requested_date' => $faker->date,
                'status' => $faker->word,
                'img_signed_doc' => $faker->imageUrl(),
                'pricing_request' => $faker->word,
                'payment_status' => $faker->word,
                'customer_info_id' => $faker->numberBetween(1, 10), ]);
        }
    }
}
