<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Service1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service1s')->insert(
            [
                [
                    'titre'=>'Lorem Ipsum',
                    'text'=>'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
                    'icon'=>'bx bxl-dribbble'
                ],
                [
                    'titre'=>'Sed ut perspiciatis',
                    'text'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                    'icon'=>'bx bx-file'
                ],
                [
                    'titre'=>'Magni Dolores',
                    'text'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                    'icon'=>'bx bx-tachometer'
                ],
                [
                    'titre'=>'Nemo Enim',
                    'text'=>'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
                    'icon'=>'bx bx-world'
                ]
                
            ]
        );
    }
}
