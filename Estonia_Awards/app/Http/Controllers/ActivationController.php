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
        return view('activations.info', compact('activations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Activation::create($request->all());
        return redirect('/activationlist');
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
        return view('activations.edit', compact('activation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activation $activation)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $activation->update($request->all());
        return redirect('/activationlist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activation $activation)
    {
        $activation->delete();
        return redirect('/activationlist');
    }
}
