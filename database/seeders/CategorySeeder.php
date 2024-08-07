<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'title' => 'Gamesssssss',
        ]);

        DB::table('categories')->insert([
            'title' => 'Game',
        ]);

        DB::table('categories')->insert([
            'title' => 'Ga',
        ]);

        DB::table('categories')->insert([
            'title' => 'Games',
        ]);
    }
}
