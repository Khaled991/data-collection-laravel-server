<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);

        \App\Models\Region::factory(5)->create();
        \App\Models\City::factory(30)->create();
        \App\Models\Village::factory(50)->create();
        \App\Models\Organization::factory(10)->create();
        \App\Models\Survey::factory(10)->create();
        \App\Models\TextQuestion::factory(20)->create();
        \App\Models\OptionQuestion::factory(15)->create();
        \App\Models\Option::factory(100)->create();
        // TODO: create seeders for joining tables [region_surveys,user_regions]
    }
}