<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Image;
use App\Models\Item;
use App\Models\ItemVariant;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        // Item::factory(25)->create();
        // Image::factory(25)->create();

        // for($x=1;$x<4;$x++)
        // {
        //     for($i=1;$i<25+1;$i++)
        //     {
        //         Image::factory()->create([
        //             'image'=> 'https://via.placeholder.com/300.png',
        //             'item_id' => $i,
        //         ]);
        //     }
        // }

        Category::factory(5)->create();

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'testadmin@example.com',
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'testuser@example.com'
        ]);

        
        // Item::factory()->create([
        //     'id' => '361',
        //     'name' => 'Sunaka Sample Product Gold High Quality Masterpiece',
        //     'general_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper ex a leo consectetur, in scelerisque odio placerat. Pellentesque tincidunt nisl gravida dolor convallis, eu gravida ligula porta. Aliquam fermentum ultricies scelerisque. Nullam rutrum dolor risus, a ullamcorper turpis sagittis ac. Vestibulum sit amet cursus eros, dictum bibendum ligula. Duis facilisis dui et nunc dictum, eu elementum massa vulputate. Proin est lacus, mattis ac auctor eu, egestas ut libero. Quisque porttitor mattis tellus, in sodales risus varius in.',
        //     'display_price' => '4000000'
        // ]);
        // Image::factory()->create([
        //     'image'=> 'silver.jpg',
        //     'item_id' => '361',
        // ]);
        // Image::factory()->create([
        //     'image'=> 'silver2.jpg',
        //     'item_id' => '361',
        // ]);
        // Image::factory()->create([
        //     'image'=> 'asoka.jpg',
        //     'item_id' => '361',
        // ]);
        // Image::factory()->create([
        //     'image'=> 'asoka2.jpg',
        //     'item_id' => '361',
        // ]);
    }
}
