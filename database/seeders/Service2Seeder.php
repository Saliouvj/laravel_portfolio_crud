<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Service2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service2s')->insert(
            [
                [
                    'titre'=>'Saul Goodman',
                    'subtitre'=>'Ceo &amp; Founder',
                    'text'=>'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
                    'imgsrc'=>"img/testimonials/testimonials-1.jpg"
                ],
                [
                    'titre'=>'Sara Wilsson',
                    'subtitre'=>'Designer',
                    'text'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
                    'imgsrc'=>"img/testimonials/testimonials-2.jpg"
                ],
                [
                    'titre'=>'Jena Karlis',
                    'subtitre'=>'Store Owner',
                    'text'=>'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
                    'imgsrc'=>"img/testimonials/testimonials-3.jpg"
                ],
                [
                    'titre'=>'Matt Brandon',
                    'subtitre'=>'Freelancer',
                    'text'=>'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
                    'imgsrc'=>"img/testimonials/testimonials-4.jpg"
                ],
                [
                    'titre'=>'John Larson',
                    'subtitre'=>'Entrepreneur',
                    'text'=>'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
                    'imgsrc'=>"img/testimonials/testimonials-5.jpg"
                ],
            ]
        );
    }
}
