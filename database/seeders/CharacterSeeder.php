<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert(
        [
            [
                'name' => 'Astérix',
                'creation_year' => 1959,
                'book_name' => "Les 12 travaux d'Astérix",
                'designer_id' => 1,
            ],
            [
                'name' => 'Titeuf',
                'creation_year' => 1993,
                'book_name' => 'Le miracle de la vie',
                'designer_id' => 2,
            ],
            [
                'name' => 'Gaston Lagaffe',
                'creation_year' => 1957,
                'book_name' => 'Le gang des gaffeurs',
                'designer_id' => 3,
            ],
            [
                'name' => 'Grand Schtroumpf',
                'creation_year' => 1958,
                'book_name' => 'Le Schtroumpfissime',
                'designer_id' => 4,
            ],
            [
                'name' => 'Gargamel',
                'creation_year' => 1958,
                'book_name' => 'Histoires de Schtroumpfs',
                'designer_id' => 4,
            ]
        ]);
    }
}
