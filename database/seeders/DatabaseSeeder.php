<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Crée uniquement le compte de connexion. Pour des données de démonstration
     * (fausses données) : php artisan db:seed --class=DemoDataSeeder
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
        ]);
    }
}
