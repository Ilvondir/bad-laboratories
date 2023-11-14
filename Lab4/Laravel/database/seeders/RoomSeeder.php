<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::truncate();
        Room::insert(
            [
                [
                    'number' => 333, 'name' => 'Double',
                    'occupancy' => 2, 'price' => 234.50 , 'hotel_id' => 1
                ],
                [
                    'number' => 301, 'name' => 'Agora',
                    'occupancy' => 4, 'price' => 330.20, 'hotel_id' => 2
                ],
                [
                    'number' => 620, 'name' => 'Sweet',
                    'occupancy' => 2, 'price' => 249.99, 'hotel_id' => 2
                ]
            ],
        );
    }
}
