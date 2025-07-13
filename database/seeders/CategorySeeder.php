<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Web Development'],
            ['category_name' => 'Graphic Design'],
            ['category_name' => 'Content Writing'],
            ['category_name' => 'SEO'],
            ['category_name' => 'Video Editing'],
        ]);
    }
}
