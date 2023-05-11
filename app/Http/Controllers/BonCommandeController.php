<?php

namespace App\Http\Controllers;

use App\Models\BonCommande;
use App\Http\Requests\StoreBonCommandeRequest;
use App\Http\Requests\UpdateBonCommandeRequest;

class BonCommandeController extends Controller
{
    public function index()
    {
        if (request('search3')) {
            $bonsCommande = BonCommande::where('id', '=', 2 . request('search3'))->get();
            } else {
                $bonsCommande=BonCommande::all();
            } return
             view('bonCommande.index',compact('bonsCommande'));
    }
    // public function printviewbon()
    // {
    //     $bonsCommande = BonCommande::all();
    //         return view ('bonCommande.printBon')->with('bonsCommande',$bonsCommande);
    // }
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
    public function insertDataByCaisse(StoreBonCommandeRequest $request){
        foreach ($request->all() as $value) {
                BonCommande::create([
                        "datebc" => $value['datec'],
                        "longueur" => $value['longueur'],
                        "largeur" => $value['largeur'],
                        "qte" => $value['qte'],
                        "prix" => $value['prix'],
                        "unite" => $value['unite'],
                        "pourcentageChute" => 1.10,
                        "avance" => $value['avance'],
                        "dateecheance" =>$value['dateecheance'],
                        "mode_paiement_id" =>$value['mode_paiement_id'] ,
                        "article_id"=> $value['article_id'],
                        "client_id"=> $value['client_id'],
                        ]
                    );
                }
                 return Response()->json(['status' => 200, 'message' => 'data inserted']);

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
