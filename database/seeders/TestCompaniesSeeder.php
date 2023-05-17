<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\TestCompanies;

class TestCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear the post table
        TestCompanies::truncate();

        // Create some posts
        $test_companies = [
            [
                'name' => 'LIONCODE',
                'address' => 'BALKAN',
                'phone' => '2311111251',
            ],
            [
                'name' => 'PAOK',
                'address' => 'TOUMPA',
                'phone' => '2314441251',
            ],
            [
                'name' => 'ARIS',
                'address' => 'PAPANASTASIOU',
                'phone' => '2311333251',
            ],
            [
                'name' => 'OTE',
                'address' => 'TSIMISKI',
                'phone' => '2311111222',
            ],
            [
                'name' => 'XANTH',
                'address' => 'TSIMISKI',
                'phone' => '2311111288',
            ],
        ];

        foreach ($test_companies as $test_company) {
            TestCompanies::create($test_company);
        }
    }
}
