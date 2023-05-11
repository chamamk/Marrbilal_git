<?php

namespace App\Http\Controllers;

use App\Models\Bl;
use App\Http\Requests\StoreBlRequest;
use App\Http\Requests\UpdateBlRequest;

class BlController extends Controller
{
    // Methode d'affichage
    public function index()
    {
        $bls=Bl::all();
        return view('bl.index',compact('bls'));
    }
    // Methode view d'ajout
    public function create()
    {
        return view('bl.create');
    }

    // Methode d'ajout
    public function store(StoreBlRequest $request)
    {
        $request->validate([
            "datebl" => "required|date",
            "client_id"=> "required|integer",
            "bon_commande_id"=> "required|integer",
            "article_id"=> "required|integer",
            "longueur" => "required",
            "largeur" => "required",
            "qte" => "required|integer",
            "etat" => "required|string",
            "isregle" => "required|string"
        ]);
        Bl::create($request->all());
        return redirect()->route('bl.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bl $bl)
    {
        return view ('bl.show',compact('bl'));
    }

    // Methode d'édition
    public function edit(Bl $bl)
    {
        return view ('bl.edit',compact('bl'));
    }

    // Methode de mise à jour
    public function update(UpdateBlRequest $request, Bl $bl)
    {
        $request->validate([
            "datebl" => "required|date",
            "client_id"=> "required|integer",
            "bon_commande_id"=> "required|integer",
            "article_id"=> "required|integer",
            "longueur" => "required",
            "largeur" => "required",
            "qte" => "required|integer",
            "etat" => "required|string",
            "isregle" => "required|string"
        ]);
        $bl->update($request->all());
        return redirect()->route('bl.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bl $bl)
    {
        $bl->delete();
        return redirect()->route('bl.index');
    }
}
