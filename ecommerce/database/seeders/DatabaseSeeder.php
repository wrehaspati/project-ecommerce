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
        \App\Models\ItemVariant::factory(50)->create();
        \App\Models\Image::factory(25)->create();

        for($x=0;$x<4;$x++)
        {
            for($i=1;$i<25+1;$i++)
            {
                \App\Models\Image::factory()->create([
                    'image'=> 'https://via.placeholder.com/300.png',
                    'item_id' => $i,
                ]);
            }
        }

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
