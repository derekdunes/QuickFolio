<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

        DB::table('payments')->insert(['user_id' => 0, "status" => 1]);
        DB::table('payments')->insert(['user_id' => 1, "status" => 0]);
    }
}
