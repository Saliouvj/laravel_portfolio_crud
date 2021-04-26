<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserList1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_list1s')->insert(
            [
                
                [
                    'titre'=>'Name',
                    'subtitre'=>'Dragfy',
                ],
                [
                    'titre'=>'Website',
                    'subtitre'=>'www.example.com',
                ],
                [
                    'titre'=>'Phone',
                    'subtitre'=>'+123 456 7890',
                ],
                [
                    'titre'=>'City',
                    'subtitre'=>'Brussels, Belgium',
                ],
            ]
        );
    }
}
