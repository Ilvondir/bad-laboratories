<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Actor;

class MovieSeeder extends Seeder
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
            Movie::truncate();
        });

        Movie::insert(
            [
                [
                    'title' => 'GoldenEye', 'length' => 130, 'year' => 1995, 'director' => 'Martin Campbell'
                ],
                [
                    'title' => 'Tomorrow Never Dies', 'length' => 119, 'year' => 1997, 'director' => 'Roger Spottiswoode'
                ],
                [
                    'title' => 'The World Is Not Enough', 'length' => 128, 'year' => 1999, 'director' => 'Michael Apted'
                ],
                [
                    'title' => 'Die Another Day', 'length' => 133, 'year' => 2002, 'director' => 'Lee Tamahori'
                ],
                [
                    'title' => 'Casino Royal', 'length' => 144, 'year' => 2006, 'director' => 'Martin Campbell'
                ],
                [
                    'title' => 'Quantum of Solace', 'length' => 106, 'year' => 2008, 'director' => 'Marc Forster'
                ],
                [
                    'title' => 'Skyfall', 'length' => 143, 'year' => 2012, 'director' => 'Sam Mendes'
                ],
                [
                    'title' => 'Spectre', 'length' => 148, 'year' => 2017, 'director' => 'Sam Mendes'
                ],
                [
                    'title' => 'No Time to Die', 'length' => 163, 'year' => 2021, 'director' => 'Cary Joji Fukunaga'
                ],
            ]
        );
    }
}
