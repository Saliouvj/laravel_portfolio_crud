<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Resume3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume3s')->insert(
            [
                [
                   'titre'=>'Senior graphic design specialist',
                   'subtitre1'=>'2019 - Present',
                   'subtitre2'=>'Experion, New York, NY',
                   'text1'=>'Lead in the design, development, and implementation of the graphic, layout, and production communication materials',
                   'text2'=>'Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. ',
                   'text3'=>'Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design',
                   'text4'=>'Oversee the efficient use of production project budgets ranging from $2,000 - $25,000'
                ],
                [
                    'titre'=>'Graphic design specialist',
                    'subtitre1'=>'2017 - 2018',
                    'subtitre2'=>'Stepping Stone Advertising, New York, NY',
                    'text1'=>'Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).',
                    'text2'=>'Managed up to 5 projects or tasks at a given time while under pressure',
                    'text3'=>'Recommended and consulted with clients on the most appropriate graphic design',
                    'text4'=>'Created 4+ design presentations and proposals a month for clients and account managers'
                 ]
            ]
        );
    }
}
