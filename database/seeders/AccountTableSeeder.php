<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'role_id' => 2,
                'gender_id' => 1,
                'first_name' => "Account",
                'last_name' => "1",
                'email' => "one@email.com",
                'password' => Hash::make('password'),
                'display_picture_link' => "one",
            ],
            [
                'role_id' => 2,
                'gender_id' => 2,
                'first_name' => "Account",
                'last_name' => "2",
                'email' => "two@email.com",
                'password' => Hash::make('password'),
                'display_picture_link' => "two",
            ],
            [
                'role_id' => 1,
                'gender_id' => 1,
                'first_name' => "Account",
                'last_name' => "3",
                'email' => "three@email.com",
                'password' => Hash::make('password'),
                'display_picture_link' => "three",
            ],
            [
                'role_id' => 2,
                'gender_id' => 2,
                'first_name' => "Account",
                'last_name' => "4",
                'email' => "four@email.com",
                'password' => Hash::make('password'),
                'display_picture_link' => "four",
            ],
            [
                'role_id' => 1,
                'gender_id' => 1,
                'first_name' => "Account",
                'last_name' => "5",
                'email' => "five@email.com",
                'password' => Hash::make('password'),
                'display_picture_link' => "five",
            ],
            [
                'role_id' => 2,
                'gender_id' => 2,
                'first_name' => "Account",
                'last_name' => "6",
                'email' => "six@email.com",
                'password' => Hash::make('password'),
                'display_picture_link' => "six",
            ],
        ]);
    }
}
