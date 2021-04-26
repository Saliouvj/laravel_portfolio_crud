<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Resume2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume2s')->insert(
            [
                [
                    'titre1'=>'Master of Fine Arts &amp; Graphic Design',
                    'titre2'=>'2015 - 2016',
                    'text1'=>'Rochester Institute of Technology, Rochester, NY',
                    'text2'=>'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend'
                ],
                [
                    'titre1'=>'Bachelor of Fine Arts &amp; Graphic Design',
                    'titre2'=>'2010 - 2014',
                    'text1'=>'Rochester Institute of Technology, Rochester, NY',
                    'text2'=>'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend'
                ],
            ]
        );
    }
}
