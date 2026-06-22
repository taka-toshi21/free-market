<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'test1',
            'email' => '1111@example.com',
            'postal' => null,
            'address' => null,
            'building' => null,
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($user);

        $user = [
            'name' => 'test2',
            'email' => '2222@example.com',
            'postal' => null,
            'address' => null,
            'building' => null,
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($user);
    }
}
