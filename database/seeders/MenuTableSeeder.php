<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        menus::create([
            'Menu_id' => 1,
            'Cat_id' => 1,
            'name' => 'americano',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 2,
            'Cat_id' => 2,
            'name' => 'coldbrew',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 3,
            'Cat_id' => 3,
            'name' => 'latte',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 4,
            'Cat_id' => 4,
            'name' => 'expresso',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 5,
            'Cat_id' => 5,
            'name' => 'mocha',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 6,
            'Cat_id' => 6,
            'name' => 'cappuccino',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 7,
            'Cat_id' => 7,
            'name' => 'macchiato',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 8,
            'Cat_id' => 8,
            'name' => 'flatwhite',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 9,
            'Cat_id' => 9,
            'name' => 'matchalatte',
            'description' => 'dripper',
            'price' => 90,
        ]);

        menus::create([
            'Menu_id' => 10,
            'Cat_id' => 10,
            'name' => 'dripcoffee',
            'description' => 'dripper',
            'price' => 90,
        ]);
    }
}
