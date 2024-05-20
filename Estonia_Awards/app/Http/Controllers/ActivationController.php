<?php

namespace App\Http\Controllers;

use App\Models\Activation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function index()
    {
        $activations = Activation::orderBy('title','asc')->get();
        return view('activations.index', compact('activations'));
    }
    public function create()
    {
        return view('activations.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Activation::create($request->all());
        return redirect('/activationlist');
    }
    public function show(Activation $activation)
    {
        //
    }
    public function activation(Activation $activation)
    {
        $activations = Activation::all();
        return view('Activations.activation', compact('activations'));
    }
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
    public function destroy(Activation $activation)
    {
        $activation->delete();
        return redirect('/activationlist');
    }
}
