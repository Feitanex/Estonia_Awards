<?php

namespace App\Http\Controllers;

use App\Models\Activation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activations = Activation::orderBy('title','asc')->get();
        return view('activations.index', compact('activations'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
    public function show(Activation $activation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activation $activation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activation $activation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activation $activation)
    {
        //
    }
}
