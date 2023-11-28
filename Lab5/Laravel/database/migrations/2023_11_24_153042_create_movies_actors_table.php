<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Movie;
use App\Models\Actor;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_actors', function (Blueprint $table) {
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignIdFor(Actor::class)->constrained();
            $table->primary(['movie_id', 'actor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_actors');
    }
};
