<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use App\Http\Requests\StoreFournisseurRequest;
use App\Http\Requests\UpdateFournisseurRequest;

class FournisseurController extends Controller
{
    // Methode d'affichage
    public function index()
    {
        if (request('search1')) {
            $fournisseurs = Fournisseur::where('id', 'like', '%' . request('search1') . '%')->get();
            } else {
                $fournisseurs=Fournisseur::all();
            } return
             view('fournisseur.index',compact('fournisseurs'));
    }

    // Methode retourne view d'ajout
    public function create()
    {
        return view('fournisseur.create');
    }

    // Methode d'ajout
    public function store(StoreFournisseurRequest $request)
    {
        $request->validate([
            "nomcomplet" => "required|string",
            "comptebancaire" => "required|string",
            "telephone" => "required",
            "adresse" => "required|string",
            "ville" => "required|string"
        ]);
        Fournisseur::create($request->all());
        return redirect()->route('fournisseur.index');
    }


    public function show(Fournisseur $fournisseur)
    {
        return view ('fournisseur.show',compact('fournisseur'));
    }

    // Methode d'édition
    public function edit(Fournisseur $fournisseur)
    {
        return view ('fournisseur.edit',compact('fournisseur'));
    }

    // Methode de mise à jour
    public function update(UpdateFournisseurRequest $request, Fournisseur $fournisseur)
    {
        $request->validate([
            "nomcomplet" => "required|string",
            "comptebancaire" => "required|string",
            "telephone" => "required",
            "adresse" => "required|string",
            "ville" => "required|string"
        ]);
        $fournisseur->update($request->all());
        return redirect()->route('fournisseur.index');

    }
    
    // Methode de suppression
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return redirect()->route('fournisseur.index');

    }
}
