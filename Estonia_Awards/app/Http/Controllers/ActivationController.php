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
    
    public function activation(Activation $activation)
    {
        $activations = Activation::all();
        return view('Activations.activation', compact('activations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activation = Activation::find($id);
        return view('activations.edit', compact('activation'));
    }

    public function update(Request $request, $id)
    {
        $activation = Activation::find($id);
        $activation->title = $request->name;
        $activation->description = $request->description;
        $activation->save();
        return redirect('/activationlist')->with('success', 'Новость успешно обновлена');
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
