<?php

namespace App\Http\Controllers;

use App\Models\Bl;
use App\Http\Requests\StoreBlRequest;
use App\Http\Requests\UpdateBlRequest;

class BlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bls=Bl::all();
        return view('bl.index',compact('bls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bl.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return redirect()->route('bonCommande.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bl $bl)
    {
        return view ('bl.show',compact('bl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bl $bl)
    {
        return view ('bl.edit',compact('bl'));
    }

    /**
     * Update the specified resource in storage.
     */
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
