<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert(
            [
                [
                    'titre'=>'Saliou',
                    'Subtitre'=>'Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.',
                    'copy'=>'Saliou',
                    'designed'=>'BootstrapMade'
                ]
            ]
        );
    }
}
