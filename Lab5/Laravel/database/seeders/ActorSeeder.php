<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Movie;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::withoutForeignKeyConstraints(function () {
            DB::table('movies_actors')->truncate();
            Actor::truncate();
        });

        Actor::insert(
            [
                [
                    'first_name' => 'Pierce', 'last_name' => 'Brosnan',
                    'birthday' => Carbon::parse('1953-05-16'), 'height' => 186
                ],
                [
                    'first_name' => 'Desmond', 'last_name' => 'Llewelyn',
                    'birthday' => Carbon::parse('1914-09-12'), 'height' => 189
                ],
                [
                    'first_name' => 'Judi', 'last_name' => 'Dench',
                    'birthday' => Carbon::parse('1934-12-09'), 'height' => 155
                ],
                [
                    'first_name' => 'Izabella', 'last_name' => 'Scorupco',
                    'birthday' => Carbon::parse('1970-06-04'), 'height' => 174
                ],
                [
                    'first_name' => 'Michelle', 'last_name' => 'Yeoh',
                    'birthday' => Carbon::parse('1962-08-06'), 'height' => 155
                ],
                [
                    'first_name' => 'Sophie', 'last_name' => 'Marceau',
                    'birthday' => Carbon::parse('1966-11-17'), 'height' => 173
                ],
                [
                    'first_name' => 'Halle', 'last_name' => 'Berry',
                    'birthday' => Carbon::parse('1966-08-14'), 'height' => 165
                ],
                [
                    'first_name' => 'Daniel', 'last_name' => 'Craig',
                    'birthday' => Carbon::parse('1967-03-02'), 'height' => 178
                ],
                [
                    'first_name' => 'Mads', 'last_name' => 'Mikkelsen',
                    'birthday' => Carbon::parse('1965-11-22'), 'height' => 183
                ],
                [
                    'first_name' => 'Olga', 'last_name' => 'Kurylenko',
                    'birthday' => Carbon::parse('1979-11-14'), 'height' => 175
                ],
                [
                    'first_name' => 'Javier', 'last_name' => 'Bardem',
                    'birthday' => Carbon::parse('1969-03-01'), 'height' => 181
                ],
                [
                    'first_name' => 'Ralph', 'last_name' => 'Fiennes',
                    'birthday' => Carbon::parse('1962-12-22'), 'height' => 180
                ],
                [
                    'first_name' => 'Naomie', 'last_name' => 'Harris',
                    'birthday' => Carbon::parse('1976-09-06'), 'height' => 173
                ],
                [
                    'first_name' => 'Christoph', 'last_name' => 'Waltz',
                    'birthday' => Carbon::parse('1956-10-04'), 'height' => 170
                ],
                [
                    'first_name' => 'Ben', 'last_name' => 'Whishaw',
                    'birthday' => Carbon::parse('1980-10-14'), 'height' => 175
                ],
                [
                    'first_name' => 'Léa', 'last_name' => 'Seydoux',
                    'birthday' => Carbon::parse('1985-07-01'), 'height' => 168
                ],
            ]
        );
    }
}
