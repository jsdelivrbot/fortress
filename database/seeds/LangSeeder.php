<?php

use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = [
          [
              'name'   => 'Українська',
              'code'   => 'uk',
              'active' => '1',
              'flag'   => 'administrator/flags/uk.png'
          ],

          [
              'name'   => 'Polski',
              'code'   => 'pl',
              'active' => '1',
              'flag'   => 'administrator/flags/pl.png'
          ],

          [
              'name'   => 'Русский',
              'code'   => 'ru',
              'active' => '1',
              'flag'   => 'administrator/flags/ru.png'
          ],

          [
              'name'   => 'English',
              'code'   => 'en',
              'active' => '1',
              'flag'   => 'administrator/flags/en.png'
          ],

          [
              'name'   => 'German',
              'code'   => 'de',
              'active' => '1',
              'flag'   => 'administrator/flags/de.png'
          ]
        ];

        for($i = 0; $i < count($langs); $i++){
            DB::table('langs')->insert([
                'name'   => $langs[$i]['name'],
                'code'   => $langs[$i]['code'],
                'active' => $langs[$i]['active'],
                'flag'   => $langs[$i]['flag'],
            ]);
        }


    }
}
