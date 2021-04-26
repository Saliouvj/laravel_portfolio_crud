<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert(
            [
                [
                    'titre'=>'About Me',
                    'subtitre'=>"Sit sint consectetur velit quisquam cupiditate impedit suscipit alias"
                ],
                [
                    'titre'=>'My Resume',
                    'subtitre'=>"Sit sint consectetur velit quisquam cupiditate impedit suscipit alias"
                ],
                [
                    'titre'=>'My services',
                    'subtitre'=>"Sit sint consectetur velit quisquam cupiditate impedit suscipit alias"
                ],
                [
                    'titre'=>'My portfolio',
                    'subtitre'=>"Sit sint consectetur velit quisquam cupiditate impedit suscipit alias"
                ],
                [
                    'titre'=>'Pricing',
                    'subtitre'=>"Sit sint consectetur velit quisquam cupiditate impedit suscipit alias"
                ],
                [
                    'titre'=>'Contact me',
                    'subtitre'=>"Sit sint consectetur velit quisquam cupiditate impedit suscipit alias"
                ]
            ]
        );
    }
}
