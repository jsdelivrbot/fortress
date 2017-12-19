<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        $faker->domainWord;

        for ($a = 1; $a <= 4; $a++) {
            for ($i = 0; $i < 200; $i++) {
                DB::table('content')->insert([
                    'key'     => $faker->domainWord,
                    'value'   => $faker->text,
                    'lang_id' => $a
                ]);
            }
        }
    }
}
