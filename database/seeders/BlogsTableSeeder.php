<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1, 10) as $index) {
            $categoryID = rand(1, 5);
            DB::table('blogs')->insert([
                'title' => $faker->sentence,
                'category_id' => $categoryID,
                'description' => $faker->paragraph,
                'tags' => $faker->words(3, true),
                'read_minutes' => rand(1, 30),
                'status' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
    }
}
