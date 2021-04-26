<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagePortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_portfolios')->insert(
            [
                [
                    'filter' => "filter-app",
                    'imgsrc' => "portfolio-1.jpg",
                    'titre1' => "App 1",
                    'desc' => "App",
                    'titre2' => "App 1",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-web",
                    'imgsrc' => "portfolio-2.jpg",
                    'titre1' => "Web 3",
                    'desc' => "Web",
                    'titre2' => "Web 3",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-app",
                    'imgsrc' => "portfolio-3.jpg",
                    'titre1' => "App 2",
                    'desc' => "App",
                    'titre' => "App 2",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-card",
                    'imgsrc' => "portfolio-4.jpg",
                    'titre1' => "Card 2",
                    'desc' => "Card",
                    'titre2' => "Card 2",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-web",
                    'imgsrc' => "portfolio-5.jpg",
                    'title' => "Web 2",
                    'desc' => "Web",
                    'titre2' => "Web 2",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-app",
                    'imgsrc' => "portfolio-6.jpg",
                    'titre1' => "App 3",
                    'desc' => "App",
                    'titre2' => "App",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-card",
                    'imgsrc' => "portfolio-7.jpg",
                    'titre1' => "Card 1",
                    'desc' => "Card",
                    'titre2' => "Card 1",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-card",
                    'imgsrc' => "portfolio-8.jpg",
                    'titre1' => "Card 3",
                    'desc' => "Card",
                    'titre2' => "Card 3",
                    'ref' => "portfolio-details.html"
                ],
                [
                    'filter' => "filter-web",
                    'imgsrc' => "portfolio-9.jpg",
                    'titre1' => "Web 3",
                    'desc' => "Web",
                    'titre2' => "Web 3",
                    'ref' => "portfolio-details.html"
                ]
            ]
        );
    }
}
