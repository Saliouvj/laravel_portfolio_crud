<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTimeListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_time_lists')->insert(
            [
                [
                    'chiffre'=>65,
                    'text1'=>'Happy Clients',
                    'text2'=>'consequuntur voluptas nostrum aliquid ipsam architecto ut.',
                    'icon'=>'icofont-simple-smile',
                    'color'=>'#20b38e'
                ],
                [
                    'chiffre'=>85,
                    'text1'=>'Projects',
                    'text2'=>'adipisci atque cum quia aspernatur totam laudantium et quia dere tan',
                    'icon'=>'icofont-document-folder',
                    'color'=>'#8a1ac2'
                ],
                [
                    'chiffre'=>12,
                    'text1'=>'Years of experience',
                    'text2'=>'aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel',
                    'icon'=>'icofont-clock-time',
                    'color'=>'#2cbdee'
                ],
                [
                    'chiffre'=>15,
                    'text1'=>'Awards',
                    'text2'=>'rerum asperiores dolor alias quo reprehenderit eum et nemo pad der',
                    'icon'=>'icofont-award',
                    'color'=>'#ffb459'
                ],
            ]
        );
    }
}
