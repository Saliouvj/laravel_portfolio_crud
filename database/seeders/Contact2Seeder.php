<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Contact2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact2s')->insert(
            [
                [
                    'icon'=>'bx bx-envelope',
                    'titre'=>'Email Me',
                    'text'=>'contact@example.com'
                ],
                [
                    'icon'=>'bx bx-phone-call',
                    'titre'=>'Call Me',
                    'text'=>'+1 5589 55488 55'
                ],
            ]
        );
    }
}
