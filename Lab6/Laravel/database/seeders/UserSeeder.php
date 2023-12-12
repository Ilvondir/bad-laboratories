<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                [
                    'name' => 'Jan', 'email' => 'jan@email.com',
                    'password' => Hash::make('1234'),
                    'role_id' => 1,
                ],
                [
                    'name' => 'Marta', 'email' => 'marta@email.com',
                    'password' => Hash::make('1234'),
                    'role_id' => 2,
                ]
            ]
        );

    }
}
