<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EBookTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(AccountTableSeeder::class);
        $this->call(OrderTableSeeder::class);
    }
}
