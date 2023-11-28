<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class MovieActorSeeder extends Seeder
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
        });

        DB::table('movies_actors')->insert(['movie_id' => 1, 'actor_id' => 1]);
        DB::table('movies_actors')->insert(['movie_id' => 1, 'actor_id' => 2]);
        DB::table('movies_actors')->insert(['movie_id' => 1, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 1, 'actor_id' => 4]);
        DB::table('movies_actors')->insert(['movie_id' => 2, 'actor_id' => 1]);
        DB::table('movies_actors')->insert(['movie_id' => 2, 'actor_id' => 2]);
        DB::table('movies_actors')->insert(['movie_id' => 2, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 2, 'actor_id' => 5]);
        DB::table('movies_actors')->insert(['movie_id' => 3, 'actor_id' => 1]);
        DB::table('movies_actors')->insert(['movie_id' => 3, 'actor_id' => 2]);
        DB::table('movies_actors')->insert(['movie_id' => 3, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 3, 'actor_id' => 5]);
        DB::table('movies_actors')->insert(['movie_id' => 4, 'actor_id' => 1]);
        DB::table('movies_actors')->insert(['movie_id' => 4, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 4, 'actor_id' => 7]);
        DB::table('movies_actors')->insert(['movie_id' => 5, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 5, 'actor_id' => 8]);
        DB::table('movies_actors')->insert(['movie_id' => 5, 'actor_id' => 9]);
        DB::table('movies_actors')->insert(['movie_id' => 6, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 6, 'actor_id' => 8]);
        DB::table('movies_actors')->insert(['movie_id' => 6, 'actor_id' => 10]);
        DB::table('movies_actors')->insert(['movie_id' => 7, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 7, 'actor_id' => 8]);
        DB::table('movies_actors')->insert(['movie_id' => 7, 'actor_id' => 11]);
        DB::table('movies_actors')->insert(['movie_id' => 7, 'actor_id' => 12]);
        DB::table('movies_actors')->insert(['movie_id' => 7, 'actor_id' => 13]);
        DB::table('movies_actors')->insert(['movie_id' => 8, 'actor_id' => 3]);
        DB::table('movies_actors')->insert(['movie_id' => 8, 'actor_id' => 8]);
    }
}
