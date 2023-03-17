<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use App\Http\Requests\StoreFournisseurRequest;
use App\Http\Requests\UpdateFournisseurRequest;

class FournisseurController extends Controller
{

    public function index()
    {
        $fournisseurs=Fournisseur::all();
        return view('fournisseur.index',compact('fournisseurs'));
    }


    public function create()
    {
        return view('fournisseur.create');
    }


    public function store(StoreFournisseurRequest $request)
    {
        Fournisseur::create($request->all());
        return redirect()->route('fournisseur.index');
    }


    public function show(Fournisseur $fournisseur)
    {
        return view ('fournisseur.show',compact('fournisseur'));
    }


    public function edit(Fournisseur $fournisseur)
    {
        return view ('fournisseur.edit',compact('fournisseur'));
    }

    public function update(UpdateFournisseurRequest $request, Fournisseur $fournisseur)
    {
        $fournisseur->update($request->all());
        return redirect()->route('fournisseur.index');

    }


    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return redirect()->route('fournisseur.index');

    }
}