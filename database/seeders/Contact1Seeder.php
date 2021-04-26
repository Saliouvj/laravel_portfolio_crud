<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Contact1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact1s')->insert(
            [
                [
                    "ref"=>'#',
                    'class'=>'twitter',
                    'icon'=>'icofont-twitter'
                ],
                [
                    "ref"=>'#',
                    'class'=>'facebook',
                    'icon'=>'icofont-facebook'
                ],
                [
                    "ref"=>'#',
                    'class'=>'instagram',
                    'icon'=>'icofont-instagram'
                ],
                [
                    "ref"=>'#',
                    'class'=>'google-plus',
                    'icon'=>'icofont-skype'
                ],
                [
                    "ref"=>'#',
                    'class'=>'linkedin',
                    'icon'=>'icofont-linkedin'
                ],
            ]
        );

    }
}
