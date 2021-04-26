<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeList1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_list1s')->insert(
            [
                [
                    'text'=>'Portland par 127,Orlando, FL'
                ],
                [
                    'text'=>'(123) 456-7891'
                ],
                [
                    'text'=>'dragfy@example.com'
                ],
            ]
        );
    }
}
