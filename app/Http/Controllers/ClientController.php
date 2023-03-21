<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=Client::all();
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $request->validate([
            "nomcomplete" => "required|string",
            "cin" => "required|string",
            "comptebancaire" => "required|integer",
            "telephone" => "required|string",
            "adresse" => "required|string",
            "ville" => "required|string"
        ]);
        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view ('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view ('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $request->validate([
            "nomcomplete" => "required|string",
            "cin" => "required|string",
            "comptebancaire" => "required|integer",
            "telephone" => "required|string",
            "adresse" => "required|string",
            "ville" => "required|string"
        ]);
        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
