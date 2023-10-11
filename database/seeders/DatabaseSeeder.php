<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // Listing::create([
        //     'title' => 'Full-stack programmer required',
        //     'tags' => 'Angular, springboot',
        //     'company' => 'wonder-money',
        //     'location' => 'Swansea, Britain',
        //     'email' => 'wonder-money@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Fantasctic opportunity for beginner',
        // ]);
        
        // Listing::create([
        //     'title' => 'Brave coders required',
        //     'tags' => 'Java, python',
        //     'company' => 'amazing-tale-tale',
        //     'location' => 'London, Britain',
        //     'email' => 'amazing-tale@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'If you are confident loser go ahead and sink in',
        // ]);

        Listing::factory(6) -> create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
