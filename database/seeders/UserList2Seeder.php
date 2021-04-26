<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserList2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_list2s')->insert(
            [
                [
                    'titre'=>'Age',
                    'subtitre'=> '24'
                    
                ],
                [
                    'titre'=>'Degree',
                    'subtitre'=> 'Master'
                    
                ],
                [
                    'titre'=>'Email',
                    'subtitre'=> 'email@example.com'
                    
                ],
                [
                    'titre'=>'Freelance',
                    'subtitre'=> 'Available'
                    
                ],
            ]
        );
    }
}
