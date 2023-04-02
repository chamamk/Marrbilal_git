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
        return view('modepayment.index',compact('modesPaiement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getPayment()
    {
        $data['modePayyment']=ModePaiement::all();     
            return response()->json($data);
    }
    public function create()
    {
        return view('modepayment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModePaiementRequest $request)
    {
        ModePaiement::create($request->all());
        return redirect()->route('modepayment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModePaiement $modePaiement)
    {
        return view ('modepayment.show',compact('modePaiement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModePaiement $modepayment)
    {
        return view ('modepayment.edit',compact('modepayment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModePaiementRequest $request, ModePaiement $modepayment)
    {
        $modepayment->update($request->all());
        return redirect()->route('modepayment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModePaiement $modepayment)
    {
        $modepayment->delete();
        return redirect()->route('modepayment.index');
    }
}
