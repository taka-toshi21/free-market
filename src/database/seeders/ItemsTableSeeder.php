<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            'user_id' => 1,
            'image' => null,
            'status' => '良好',
            'name' => '腕時計',
            'brand' => 'Rolax',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'price' => 15000,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 1,
            'image' => null,
            'status' => '目立った傷や汚れなし',
            'name' => 'HDD',
            'brand' => '西芝',
            'description' => '高速で信頼性の高いハードディスク',
            'price' => 5000,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 1,
            'image' => null,
            'status' => 'やや傷や汚れあり',
            'name' => '玉ねぎ3束',
            'brand' => null,
            'description' => '新鮮な玉ねぎ3束のセット',
            'price' => 300,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 1,
            'image' => null,
            'status' => '状態が悪い',
            'name' => '革靴',
            'brand' => null,
            'description' => 'クラシックなデザインの革靴',
            'price' => 4000,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 1,
            'image' => null,
            'status' => '良好',
            'name' => 'ノートPC',
            'brand' => null,
            'description' => '高性能なノートパソコン',
            'price' => 45000,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 2,
            'image' => null,
            'status' => '目立った傷や汚れなし',
            'name' => 'マイク',
            'brand'=> null,
            'description' => '高音質のレコーディング用マイク',
            'price' => 8000,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 2,
            'image' => null,
            'status' => 'やや傷や汚れあり',
            'name' => 'ショルダーバッグ',
            'brand' => null,
            'description' => 'おしゃれなショルダーバッグ',
            'price' => 3500,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 2,
            'image' => null,
            'status' => '状態が悪い',
            'name' => 'タンブラー',
            'brand' => null,
            'description' => '使いやすいタンブラー',
            'price' => 500,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 2,
            'image' => null,
            'status' => '良好',
            'name' => 'コーヒーミル',
            'brand' => 'Starbacks',
            'description' => '手動のコーヒーミル',
            'price' => 4000,
        ];
        DB::table('items')->insert($item);

        $item = [
            'user_id' => 2,
            'image' => null,
            'status' => '目立った傷や汚れなし',
            'name' => 'メイクセット',
            'brand' => null,
            'description' => '便利なメイクアップセット',
            'price' => 2500,
        ];
        DB::table('items')->insert($item);
    }
}
