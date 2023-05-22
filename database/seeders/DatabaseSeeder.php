<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestCompanies;
use App\Models\Events;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TestCompaniesSeeder::class);
        $this->call(EventSeeder::class);
    }
}
