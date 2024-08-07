<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cards')->insert([
            'text' => 'A',
            'category_id' => 1
        ]);

        DB::table('cards')->insert([
            'text' => 'B',
            'category_id' => 1
        ]);

        DB::table('cards')->insert([
            'text' => 'C',
            'category_id' => 1
        ]);

        DB::table('cards')->insert([
            'text' => 'D',
            'category_id' => 1
        ]);
        DB::table('cards')->insert([
            'text' => 'A',
            'category_id' => 2
        ]);

        DB::table('cards')->insert([
            'text' => 'B',
            'category_id' => 3
        ]);

        DB::table('cards')->insert([
            'text' => 'C',
            'category_id' => 3
        ]);

        DB::table('cards')->insert([
            'text' => 'D',
            'category_id' => 2
        ]);
        DB::table('cards')->insert([
            'text' => 'A',
            'category_id' => 4
        ]);

        DB::table('cards')->insert([
            'text' => 'B',
            'category_id' => 2
        ]);

        DB::table('cards')->insert([
            'text' => 'C',
            'category_id' => 3
        ]);

        DB::table('cards')->insert([
            'text' => 'D',
            'category_id' => 3
        ]);
    }
}
