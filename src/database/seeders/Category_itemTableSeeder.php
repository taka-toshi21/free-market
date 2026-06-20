<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_itemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_item')->insert([
            ['id' => 1, 'item_id' => 1, 'category_id' => 1],
            ['id' => 2, 'item_id' => 1, 'category_id' => 5],
            ['id' => 3, 'item_id' => 1, 'category_id' => 12],
            ['id' => 4, 'item_id' => 2, 'category_id' => 2],
            ['id' => 5, 'item_id' => 2, 'category_id' => 8],
            ['id' => 6, 'item_id' => 3, 'category_id' => 10],
            ['id' => 7, 'item_id' => 4, 'category_id' => 1],
            ['id' => 8, 'item_id' => 4, 'category_id' => 5],
            ['id' => 9, 'item_id' => 4, 'category_id' => 12],
            ['id' => 10, 'item_id' => 5, 'category_id' => 2],
            ['id' => 11, 'item_id' => 5, 'category_id' => 8],
            ['id' => 12, 'item_id' => 6, 'category_id' => 13],
            ['id' => 13, 'item_id' => 7, 'category_id' => 1],
            ['id' => 14, 'item_id' => 7, 'category_id' => 11],
            ['id' => 15, 'item_id' => 8, 'category_id' => 3],
            ['id' => 16, 'item_id' => 8, 'category_id' => 10],
            ['id' => 17, 'item_id' => 8, 'category_id' => 11],
            ['id' => 18, 'item_id' => 9, 'category_id' => 2],
            ['id' => 19, 'item_id' => 9, 'category_id' => 3],
            ['id' => 20, 'item_id' => 9, 'category_id' => 10],
            ['id' => 21, 'item_id' => 10, 'category_id' => 1],
            ['id' => 22, 'item_id' => 10, 'category_id' => 4],
            ['id' => 23, 'item_id' => 10, 'category_id' => 6],
        ]);
    }
}
