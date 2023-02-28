<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $lastInsertedId = DB::table('categories')->max('id');
        for($i =$lastInsertedId; $i < $lastInsertedId+20;$i++){
            DB::table('categories')->insert([
                'id' => $i+1,
                'name' => $faker->word,
                'created_at_category' => $faker->dateTimeBetween('-1 year')->format('Y-m-d H:i:s'),
                'updated_at_category' => $faker->dateTimeBetween('-1 year')->format('Y-m-d H:i:s'),
            ]);
        }
    }
}

    