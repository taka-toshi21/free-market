<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'test1',
                'email' => '1111@example.com',
                'postal' => null,
                'address' => null,
                'building' => null,
                'password' => Hash::make('password'),
            ],
            [
            'name' => 'test2',
            'email' => '2222@example.com',
            'postal' => null,
            'address' => null,
            'building' => null,
            'password' => Hash::make('password'),
            ],
        ]);
    }
}
