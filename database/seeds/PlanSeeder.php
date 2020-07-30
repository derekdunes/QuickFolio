<?php

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert(['name' => "Free"]);
        DB::table('plans')->insert(['name' => "Premium"]);
    }
}
