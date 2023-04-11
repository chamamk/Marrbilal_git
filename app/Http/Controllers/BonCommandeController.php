<?php

namespace App\Http\Controllers;

use App\Models\BonCommande;
use App\Http\Requests\StoreBonCommandeRequest;
use App\Http\Requests\UpdateBonCommandeRequest;

class BonCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        if (request('search3')) {
            $bonsCommande = BonCommande::where('client_id', '=', 2 . request('search3'))->get();
            } else {
                $bonsCommande=BonCommande::all();
            } return
             view('bonCommande.index',compact('bonsCommande'));
    }
    public function printviewbon()
    {
        $bonsCommande = BonCommande::all();
            return view ('bonCommande.printBon')->with('bonsCommande',$bonsCommande);
    }
    public function caisse(){
        return view('bonCommande.caisse');
    }
    public function create()
    {
        return view('bonCommande.create');
    }
    public function store(StoreBonCommandeRequest $request)
    {
        $request->validate([
            "datebc" => "required|date",
            "client_id"=> "required|integer",
            "article_id"=> "required|integer",
            "longueur" => "required|integer",
            "largeur" => "required|integer",
            "pourcentageChute" => "required|integer",
            "qte" => "required|integer",
            "unite" => "required|string",
            "prix" => "required|integer",
            "avance" => "required|integer",
            "mode_paiement_id" => "required|integer",
            "dateecheance" => "required|date"
        ]);
        BonCommande::create($request->all());
        return redirect()->route('bonCommande.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BonCommande $bonCommande)
    {
        return view ('bonCommande.show',compact('bonCommande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BonCommande $bonCommande)
    {
        return view ('bonCommande.edit',compact('bonCommande'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBonCommandeRequest $request, BonCommande $bonCommande)
    {
        $request->validate([
            "datebc" => "required|date",
            "client_id"=> "required|integer",
            "article_id"=> "required|integer",
            "longueur" => "required",
            "largeur" => "required",
            "pourcentageChute" => "required",
            "qte" => "required|integer",
            "unite" => "required|string",
            "prix" => "required",
            "avance" => "required|integer",
            "mode_paiement_id" => "required|integer",
            "dateecheance" => "required|date"
        ]);
        $bonCommande->update($request->all());
        return redirect()->route('bonCommande.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BonCommande $bonCommande)
    {
        $bonCommande->delete();
        return redirect()->route('bonCommande.index');
    }
}
