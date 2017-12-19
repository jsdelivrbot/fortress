<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            DB::table('room')->insert([
                'first_user'   => rand(1,2),
                'second_user'  => rand(1,2),
            ]);
        }
    }
}
