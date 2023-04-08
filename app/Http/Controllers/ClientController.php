<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request('search1')) {
            $clients = Client::where('nomcomplete', 'like', '%' . request('search1') . '%')->get();
            } else {
                $clients=Client::all();
            } return
            view('client.index',compact('clients'));
    }
    public function propriview()
    {
        $clients = Client::all();
            return view ('client.printClient')->with('clients',$clients);
    }
    public function getClient()
    {
        $data['clients']=Client::all();
            return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
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
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view ('client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view ('client.edit',compact('client'));
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
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
