<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Campaign::create([
            'title' => 'campaign 1',
            'description' => 'campaign uno'
        ]);

        Campaign::create([
            'title' => 'campaign 2',
            'description' => 'campaign dos'
        ]);

        Campaign::create([
            'title' => 'campaign 3',
            'description' => 'campaign tres'
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
