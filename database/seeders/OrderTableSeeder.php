<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'account_id' => 2,
                'ebook_id' => 1,
                'order_date' => Date::now(),
            ],
            [
                'account_id' => 4,
                'ebook_id' => 2,
                'order_date' => Date::now(),
            ],
            [
                'account_id' => 6,
                'ebook_id' => 3,
                'order_date' => Date::now(),
            ]
        ]);
    }
}
