<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeTitre2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_titre2s')->insert(
            [
                [
                    'titre'=>'Education'
                ],
                [
                    'titre'=>'Professional Experience'
                ], 
            ]
            
        );
    }
}
