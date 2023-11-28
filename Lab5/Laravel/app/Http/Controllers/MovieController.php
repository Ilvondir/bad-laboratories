<?php

namespace App\Http\Controllers;
use App\Http\Resources\ActorResource;
use App\Models\Movie;
use App\Models\Actor;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Http\Resources\MovieCollection;
use App\Http\Resources\ActorCollection;
use App\Http\Resources\MovieResource;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $switch = $request->boolean("includeActors");
        return MovieResource::collection($switch ? Movie::all()->load("actors") : Movie::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        return new MovieResource(Movie::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        $movie = $movie->refresh();
        return new MovieResource($movie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return response()->json(null, 204);
    }

    /**
     *  Returns all actors of a given movie
     */
    public function getMovieCast(Movie $movie)
    {
        return ActorResource::collection($movie->actors);
    }

    public function addActorToMovieCast(Movie $movie, Actor $actor)
    {
        $movie->actors()->syncWithoutDetaching($actor->id);
        return response(null, 202);
    }

    public function removeActorFromMovieCast(Movie $movie, Actor $actor)
    {
        $movie->actors()->detach($actor->id);
        return response(null, 204);
    }

    public function setCast(Movie $movie, Request $request)
    {
        $tab = $request->get("actors");
        $movie->actors()->detach();
        foreach ($tab as $id) $movie->actors()->syncWithoutDetaching($id);
        return response(null, 202);
    }

}
