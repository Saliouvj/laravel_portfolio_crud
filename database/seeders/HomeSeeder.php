<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert(
            [
                [
                    'titre'=>'Dragfy',
                    'subtitre'=>"I'M A FULL STACK DEVELOPPER IN BELGIUM"
                ]
            ]
        );
    }
}
