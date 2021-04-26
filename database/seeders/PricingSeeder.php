<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert(
            [
                [
                    'titre'=>'Free',
                    'chiffre'=>0,
                    'text1'=>'/ month',
                    'text2'=>'Aida dere',
                    'text3'=>'Nec feugiat nisl',
                    'text4'=>'Nulla at volutpat dola',
                    'text5'=>'Pharetra massa',
                    'text6'=>'Massa ultricies mi',
                    'btn'=>'Buy Now'
                ],
                [
                    'titre'=>'Business',
                    'chiffre'=>19,
                    'text1'=>'/ month',
                    'text2'=>'Aida dere',
                    'text3'=>'Nec feugiat nisl',
                    'text4'=>'Nulla at volutpat dola',
                    'text5'=>'Pharetra massa',
                    'text6'=>'Massa ultricies mi',
                    'btn'=>'Buy Now'
                ],
                [
                    'titre'=>'Developer',
                    'chiffre'=>29,
                    'text1'=>'/ month',
                    'text2'=>'Aida dere',
                    'text3'=>'Nec feugiat nisl',
                    'text4'=>'Nulla at volutpat dola',
                    'text5'=>'Pharetra massa',
                    'text6'=>'Massa ultricies mi',
                    'btn'=>'Buy Now'
                ],
                [
                    'titre'=>'Ultimate',
                    'chiffre'=>'49',
                    'text1'=>'/ month',
                    'text2'=>'Aida dere',
                    'text3'=>'Nec feugiat nisl',
                    'text4'=>'Nulla at volutpat dola',
                    'text5'=>'Pharetra massa',
                    'text6'=>'Massa ultricies mi',
                    'btn'=>'Buy Now'
                ],
            ]
        );

    }
}
