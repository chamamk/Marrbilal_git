<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    // Methode d'affichage
    public function index()
    {
        if (request('search1')) {
            $clients = Client::where('id', 'like', '%' . request('search1') . '%')->get();
            } else {
                $clients=Client::all();
            } return
            view('client.index',compact('clients'));
    }

    //Methode qui retourne la liste des clients
    public function getClient()
    {
        $data['clients']=Client::all();
            return response()->json($data);
    }

    // Methode retourne view d'ajout
    public function create()
    {
        return view('client.create');
    }

    // Methode d'ajout
    public function store(StoreClientRequest $request)
    {
        $request->validate([
            "nomcomplete" => "required|string",
            "cin" => "required|string",
            "comptebancaire" => "required|integer",
            "telephone" => "required",
            "adresse" => "required|string",
            "ville" => "required|string"
        ]);
        Client::create($request->all());
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view ('client.show',compact('client'));
    }

    // Methode d'édition
    public function edit(Client $client)
    {
        return view ('client.edit',compact('client'));
    }

    // Methode de mise à jour
    public function update(UpdateClientRequest $request, Client $client)
    {
        $request->validate([
            "nomcomplete" => "required|string",
            "cin" => "required|string",
            "comptebancaire" => "required|integer",
            "telephone" => "required|integer",
            "adresse" => "required|string",
            "ville" => "required|string"
        ]);
        $client->update($request->all());
        return redirect()->route('client.index');
    }

    // Methode de suppression
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
