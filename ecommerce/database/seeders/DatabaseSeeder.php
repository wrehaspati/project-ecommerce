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
        \App\Models\User::factory(10)->create();
        \App\Models\Item::factory(25)->create();
        \App\Models\ItemDetail::factory(50)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'testadmin@example.com',
            'role' => 'admin'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'testuser@example.com'
        ]);
    }
}
