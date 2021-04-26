<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserList4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_list4s')->insert(
            [
                [
                    'titre'=>'HTML',
                    'chiffre'=>90
                ],
                [
                    'titre'=>'CSS',
                    'chiffre'=>90
                ],
                [
                    'titre'=>'JavaScript',
                    'chiffre'=>75
                ],
            ]
        );
    }
}
