<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('e_books')->insert([
            [
                'title' => 'Fiction 1',
                'author' => 'Author 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'title' => 'Science 1',
                'author' => 'Author 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'title' => 'Computer 1',
                'author' => 'Author 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'title' => 'Fiction 2',
                'author' => 'Author 4',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'title' => 'Science 2',
                'author' => 'Author 5',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'title' => 'Computer 2',
                'author' => 'Author 6',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'title' => 'Fiction 3',
                'author' => 'Author 7',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
        ]);
    }
}
