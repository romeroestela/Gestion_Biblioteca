<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'El gran Gatsby',
            'published_year' => 1925,
        ]);

        DB::table('books')->insert([
            'title' => 'Cien años de soledad',
            'published_year' => 1967,
        ]);
    }
}
