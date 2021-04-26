<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert(
            [
                [
                    'ref'=>'/',
                    'titre'=>"Home"
                ],
                [
                    'ref'=>'/about',
                    'titre'=>"About"
                ],
                [
                    'ref'=>'/resume',
                    'titre'=>"Resume"
                ],
                [
                    'ref'=>'/services',
                    'titre'=>"Services"
                ],
                [
                    'ref'=>'/portfolio',
                    'titre'=>"Portfolio"
                ],
                [
                    'ref'=>'/contact',
                    'titre'=>"Contact"
                ],
            ]
        );
    }
}
