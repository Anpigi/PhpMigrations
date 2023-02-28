<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $lastInsertedId = DB::table('books')->max('id');
        for($i =$lastInsertedId; $i < $lastInsertedId+20;$i++){
            DB::table('books')->insert([
                'id' => $i+1,
                'isbn' => $faker->ean13,
                'title' => $faker->sentence,
                'author' => $faker->name,
                'published_date' => $faker->dateTimeBetween('-1 year')->format('Y-m-d'),
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 1, 1000),
                'created_at_book' => $faker->dateTimeThisYear,
                'updated_at_book' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
