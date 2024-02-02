<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ApplicationRequest;
use App\Models\CustomerInfo;
use App\Models\PricingLineItem;
use App\Models\PricingQuote;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesTableSeeder;

class DatabaseSeeder extends Seeder
{
    // php artisan migrate --path=database/migrations/2024_02_02_054859_create_users_table.php
    // php artisan migrate:rollback --path=database/migrations/2024_02_02_054859_create_users_table.php

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(RolesTableSeeder::class);
        // $this->call(CustomerInfosTableSeeder::class);
        // $this->call(ApplicationRequestsTableSeeder::class);
        $this->call(PricingQuotesTableSeeder::class);
        // $this->call(PricingLineItemsTableSeeder::class);



        // $this->call(ApplicationRequestsTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
