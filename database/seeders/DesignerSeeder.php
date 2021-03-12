<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert(
            [
                [
                    'name' => 'Albert Uderzo',
                    'birth_year' => 1927,
                    'nationality' => 'Français'
                ],
                [
                    'name' => 'Zep',
                    'birth_year' => 1967,
                    'nationality' => 'Français'
                ],
                [
                    'name' => 'André Franquin',
                    'birth_year' => 1924,
                    'nationality' => 'Français'
                ],
                [
                    'name' => 'Peyo',
                    'birth_year' => 1928,
                    'nationality' => 'Belge'
                ]
            ]
            );
    }
}
