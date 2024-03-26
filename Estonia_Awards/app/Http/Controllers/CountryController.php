<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::orderBy('Code', 'asc')->latest()->paginate(8);
        return view('countries.listCountry', compact('countries'))->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request){
        $search = $request->input('search');

        $countries = Country::query()
        ->where('Name', 'LIKE', "%{$search}%")
        ->orWhere('Continent', 'LIKE', "%{$search}%")
        ->get();

        return view('countries.searchCountry', compact('countries'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($code)
    {
        $country = Country::where('code', $code)->first();
        $countryCities= City::where('CountryCode',$country->Code )->get();
        return view('countries.show', compact('country', 'countryCities'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        //
    }
}
