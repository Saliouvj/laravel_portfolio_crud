<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HomeSeeder::class,
        ]);
        $this->call([
            FooterSeeder::class,
        ]);
        $this->call([
            HeaderSeeder::class,
        ]);
        $this->call([
            UserList1Seeder::class,
        ]);
        $this->call([
            UserList2Seeder::class,
        ]);
        $this->call([
            TitreSeeder::class,
        ]);
        $this->call([
            UserList4Seeder::class,
        ]);
        $this->call([
            UserTimeListSeeder::class,
        ]);
        $this->call([
            ResumeList1Seeder::class,
        ]);
        $this->call([
            ResumeTitreSeeder::class,
        ]);
        $this->call([
            ResumeTitre2Seeder::class,
        ]);
        $this->call([
            Resume2Seeder::class,
        ]);
        $this->call([
            Resume3Seeder::class,
        ]);
        $this->call([
            Service1Seeder::class,
        ]);
        $this->call([
            Service2Seeder::class,
        ]);
        $this->call([
            PricingSeeder::class,
        ]);
        $this->call([
            TitrePortfolioSeeder::class,
        ]);
        $this->call([
            ImagePortfolioSeeder::class,
        ]);
        $this->call([
            Contact1Seeder::class,
        ]);
        $this->call([
            ContactIconSeeder::class,
        ]);
        $this->call([
            Contact2Seeder::class,
        ]);
    }
}
