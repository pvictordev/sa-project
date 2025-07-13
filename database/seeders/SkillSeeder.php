<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('skills')->insert([
            ['skill_name' => 'Web Development'],
            ['skill_name' => 'Graphic Design'],
            ['skill_name' => 'Content Writing'],
            ['skill_name' => 'SEO'],
            ['skill_name' => 'Video Editing'],
        ]);
    }
}
