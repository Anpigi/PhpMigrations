<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $lastInsertedId = DB::table('book_category')->max('id');
        $idBook = DB::table('books')->rand('id');
        $maxCategories = DB::table('categories')->max('id');

        for ($i = $lastInsertedId; $i < $lastInsertedId + 20; $i++) {
            DB::table('book_category')->insert([
                'id' => $i + 1,
                'id_book' => $idBook,
                'id_category' => rand(1,$maxCategories),
            ]);
        }
    }
}
