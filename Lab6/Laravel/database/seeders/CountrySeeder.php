<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::insert(
            [
                [
                    'name' => 'USA', 'code' => 'US', 'currency' => 'dolar amerykański',
                    'area' => '9833520', 'language' => 'angielski'
                ],
                [
                    'name' => 'Chiny', 'code' => 'CN', 'currency' => 'yuan',
                    'area' => '9596960', 'language' => 'mandaryński'
                ],
                [
                    'name' => 'Austria', 'code' => 'AT', 'currency' => 'euro',
                    'area' => '83879', 'language' => 'niemiecki'
                ],
                [
                    'name' => 'Tanzania', 'code' => 'TZ', 'currency' => 'szyling tanzański',
                    'area' => '947300', 'language' => 'suahili'
                ],
                [
                    'name' => 'Polska', 'code' => 'PL', 'currency' => 'złoty',
                    'area' => '38179800', 'language' => 'polski'
                ],
                [
                    'name' => 'Australia', 'code' => 'AU', 'currency' => 'dolar australijski',
                    'area' => '7686850', 'language' => 'angielski'
                ],
            ]
        );
    }
}
