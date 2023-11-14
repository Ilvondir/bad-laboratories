<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Hotel;
use App\Models\Room;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::withoutForeignKeyConstraints(function () {
            Room::truncate();
            Hotel::truncate();
        });

        Hotel::insert(
            [
                [
                    'name' => 'Ibis Centrum', 'stars' => 2, 'city' => 'Łódź'
                ],
                [
                    'name' => 'Ibis Centrum', 'stars' => 3, 'city' => 'Warszawa'
                ],
                [
                    'name' => 'Ibis Stare Miasto', 'stars' => 3, 'city' => 'Warszawa'
                ],
            ]
        );
    }
}
