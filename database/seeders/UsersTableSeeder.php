<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\UserConsts;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Anton',
                'last_name' => 'Bohachuk',
                'birthdate' => '2003-03-16',
                'type' => UserConsts::LISTENER,
                'country' => 'Ukraine',
                'email' => 'anton@groupbwt.com',
                'phone_number' => '+38 (099) 112-4364',
                'password' => Hash::make('12345678'), 
            ],
            [
                'name' => 'Bohdan',
                'last_name' => 'Bohachuk',
                'birthdate' => '2007-05-13',
                'type' => UserConsts::ANNOUNCER,
                'country' => 'Ukraine',
                'email' => 'bohdan@groupbwt.com',
                'phone_number' => '+38 (066) 203-7939',
                'password' => Hash::make('12345678'), 
            ],
            [
                'name' => 'Liza',
                'last_name' => 'Bohachuk',
                'birthdate' => '2004-04-28',
                'type' => UserConsts::ANNOUNCER,
                'country' => 'Ukraine',
                'email' => 'liza@groupbwt.com',
                'phone_number' => '+38 (099) 888-8888',
                'password' => Hash::make('12345678'), 
            ],
        ];

        User::insert($users);
    }
}
