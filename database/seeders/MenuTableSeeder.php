<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $menus = [
            ['Menu_id' => 1,
            'Cat_id' => 1,
            'name' => 'americano',
            'discription' => 'dripper',
            'price' => 90, 
            ],
            [
                'Menu_id' => 2,
                'Cat_id' => 2,
                'name' => 'coldbrew',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 3,
                'Cat_id' => 3,
                'name' => 'latte',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 4,
                'Cat_id' => 2,
                'name' => 'expresso',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 5,
                'Cat_id' => 3,
                'name' => 'mocha',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 6,
                'Cat_id' => 1,
                'name' => 'cappuccino',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 7,
                'Cat_id' => 2,
                'name' => 'macchiato',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 8,
                'Cat_id' => 1,
                'name' => 'flatwhite',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 9,
                'Cat_id' => 3,
                'name' => 'matchalatte',
                'discription' => 'dripper',
                'price' => 90,
            ],
            [
                'Menu_id' => 10,
                'Cat_id' => 2,
                'name' => 'dripcoffee',
                'discription' => 'dripper',
                'price' => 90,
            ]
            ];

            DB::table('menus')->insert($menus);
    }
}
