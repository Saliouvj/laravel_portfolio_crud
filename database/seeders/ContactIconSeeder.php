<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_icons')->insert(
            [
                [
                    'titre'=>'Social Profiles',
                    'icon'=>'bx bx-share-alt'
                ],
            ]
        );
    }
}
