<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitrePortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titre_portfolios')->insert(
            [
                [
                    'titre'=>'All'
                ],
                [
                    'titre'=>'App'
                ],
                [
                    'titre'=>'Card'
                ],
                [
                    'titre'=>'Web'
                ]
            ]
        );
    }
}
