<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tastes')->insert([
            'key' => 1,
            'description' => 'Süß'
        ]);
        DB::table('tastes')->insert([
            'key' => 2,
            'description' => 'Sauer'
        ]);
        DB::table('tastes')->insert([
            'key' => 3,
            'description' => 'Anders'
        ]);

        DB::table('products')->insert([
            'name' => 'Extra',
            'taste_id' => 1,
            'color' => 'Weiß-Blau',
            'price' => 250,
        ]);
        DB::table('products')->insert([
            'name' => 'Airwaves',
            'taste_id' => 2,
            'color' => 'Blau',
            'price' => 199,
        ]);
        DB::table('products')->insert([
            'name' => 'Hubba Bubba',
            'taste_id' => 3,
            'color' => 'Braun',
            'price' => 267,
        ]);
        DB::table('products')->insert([
            'name' => '5 Gum',
            'taste_id' => 1,
            'color' => 'Lila',
            'price' => 160,
        ]);
    }
}
