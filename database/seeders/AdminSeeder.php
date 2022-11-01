<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Admin',
            'last_name' => 'Admin',
            'birthdate' => '2003-03-16',
            'type' => 'admin',
            'country' => 'Ukraine',
            'email' => 'admin@groupbwt.com',
            'phone_number' => '+38 (099) 112-4364',
            'password' => Hash::make('12345678'),
        ];

        User::insert($user);
    }
}
