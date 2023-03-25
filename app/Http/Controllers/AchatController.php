<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Http\Requests\StoreAchatRequest;
use App\Http\Requests\UpdateAchatRequest;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achats=Achat::all();
        return view('achat.index',compact('achats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('achat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAchatRequest $request)
    {
        $request->validate([
            "dateachat" => "required|date",
            "article_id"=> "required|integer",
            "longueur" => "required|integer",
            "largeur" => "required|integer",
            "qte" => "required|integer",
            "unite" => "required|string",
            "prix" => "required|integer",
            "fournisseur_id" => "required|integer",
            "mode_paiement_id" => "required|integer",
            "dateecheance" => "required|date"
        ]);
        Achat::create($request->all());
        return redirect()->route('achat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Achat $achat)
    {
        return view ('achat.show',compact('achat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achat $achat)
    {
        return view ('achat.edit',compact('achat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAchatRequest $request, Achat $achat)
    {
        $request->validate([
            "dateachat" => "required|date",
            "article_id"=> "required|integer",
            "longueur" => "required|integer",
            "largeur" => "required|integer",
            "qte" => "required|integer",
            "unite" => "required|string",
            "prix" => "required|integer",
            "fournisseur_id" => "required|integer",
            "mode_paiement_id" => "required|integer",
            "dateecheance" => "required|date"
        ]);
        $achat->update($request->all());
        return redirect()->route('achat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achat $achat)
    {
        $achat->delete();
        return redirect()->route('achat.index');
    }
}
