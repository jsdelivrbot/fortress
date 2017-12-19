<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [

            [
                'name'        => 'Іван',
                'surname'     => 'Войтович',
                'avatar'      => 'administrator/avatars/owner.jpg',
                'email'       => '',
                'super_admin' => 1,
                'password'    => Hash::make('')

            ],

            [
                'name'        => 'Назар',
                'surname'     => 'Яненко',
                'avatar'      => 'administrator/avatars/me.jpg',
                'email'       => 'nazar.yanenko@gmail.com',
                'super_admin' => 1,
                'password'    => Hash::make('azerate23'),

            ],

        ];

//        DB::table('administrators')->truncate();

        for($i = 0; $i < count($admins); $i++) {
            DB::table('administrators')->insert([
                'name'        => $admins[$i]['name'],
                'surname'     => $admins[$i]['surname'],
                'avatar'      => $admins[$i]['avatar'],
                'email'       => $admins[$i]['email'],
                'super_admin' => $admins[$i]['super_admin'],
                'password'    => $admins[$i]['password']
            ]);
        }

    }
}
