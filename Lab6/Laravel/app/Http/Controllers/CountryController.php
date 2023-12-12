<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CountryCollection(Country::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        return new CountryResource(Country::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return new CountryResource($country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update($request->validated());
        return new CountryResource($country->refresh());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        if (! Gate::allows('is-admin')) {
            abort(403, "Brak uprawnień do usunięcia wycieczki!");
        }

        $country->delete();
        return response()->json(null, 204);
    }
}
