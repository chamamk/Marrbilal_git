<?php

namespace App\Http\Controllers;

use App\Models\ModePaiement;
use App\Http\Requests\StoreModePaiementRequest;
use App\Http\Requests\UpdateModePaiementRequest;

class ModePaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modesPaiement=ModePaiement::all();
        return view('modePaiement.index',compact('modesPaiement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modePaiement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModePaiementRequest $request)
    {
        ModePaiement::create($request->all());
        return redirect()->route('modePaiement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModePaiement $modePaiement)
    {
        return view ('modePaiement.show',compact('modePaiement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModePaiement $modePaiement)
    {
        return view ('modePaiement.edit',compact('modePaiement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModePaiementRequest $request, ModePaiement $modePaiement)
    {
        $modePaiement->update($request->all());
        return redirect()->route('modePaiement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModePaiement $modePaiement)
    {
        $modePaiement->delete();
        return redirect()->route('modePaiement.index');
    }
}
