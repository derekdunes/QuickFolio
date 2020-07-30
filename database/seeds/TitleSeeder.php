<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('titles')->insert(['name' => "FullStack Engineer"]);
        DB::table('titles')->insert(['name' => "Frontend Engineer"]);
        DB::table('titles')->insert(['name' => "Backend Engineer"]);
        DB::table('titles')->insert(['name' => "UI/UX Designer"]);
        DB::table('titles')->insert(['name' => "DevOps Engineer"]);
    
    }
}
