<?php

namespace Database\Seeders;
use App\Models\Listing;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       \App\Models\User::factory(10)->create();

       Listing::create([
            'title' => 'Test Listing',
            'description' => 'This is a test listing',
            'tags' => 'laravel, php, developement, backend',
            'company' => 'Test Company',
            'location' => 'Generic City',
            'email' => 'test@example.com',
            'website' => 'https://example.com',
       ]);

       Listing::create([
        'title' => 'Example Listing',
        'description' => 'This is a test listing',
        'tags' => 'javascript, livewire, php, developement, frontend',
        'company' => 'Example Company',
        'location' => 'Generic Metro Area',
        'email' => 'example@example.com',
        'website' => 'https://example.com',
       ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
