<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB ;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('categories')->insert(
    ['title' => 'Plantes',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s")]);
    DB::table('categories')->insert(
    ['title' => 'Graines',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s")]);
    DB::table('categories')->insert(
    ['title' => 'Outils',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s")]);
    // Graines 
    // Outils
    }
}
