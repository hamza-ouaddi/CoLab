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
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        // 'title' => 'Laravel Senior Developer',
        // 'tags' => 'php, laravel, javascript, developer',
        // 'company' => 'Haml Corp',
        // 'location' => 'Boston, MA',
        // 'email' => 'haml@jobs.com',
        // 'website' => 'haml.co',
        // 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        // ]);

        // Listing::create([
        //     'title' => 'Full-stack Developer',
        //     'tags' => 'fullstack, frontend, backend, react, vue, php, developer',
        //     'company' => 'Next Studio',
        //     'location' => 'New York, NY',
        //     'email' => 'offers@next.net',
        //     'website' => 'nextstudio.com',
        //     'description' => 'Magna ac placerat vestibulum lectus mauris ultrices eros in cursus. Fames ac turpis egestas maecenas pharetra convallis posuere. In nulla posuere sollicitudin aliquam ultrices sagittis. Tortor at auctor urna nunc id cursus metus aliquam. Turpis egestas integer eget aliquet nibh praesent tristique magna sit.',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
