<?php

namespace App\Http\Controllers;

use App\Models\TypeMarbre;
use App\Http\Requests\StoreTypeMarbreRequest;
use App\Http\Requests\UpdateTypeMarbreRequest;

class TypeMarbreController extends Controller
{
    public function index()
    {
        $typesmarbre=TypeMarbre::all();
        return view('typemarbre.index',compact('typesmarbre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('typemarbre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeMarbreRequest $request)
    {
        TypeMarbre::create($request->all());
        return redirect()->route('typemarbre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeMarbre $typemarbre)
    {
        return view ('typemarbre.show',compact('typemarbre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeMarbre $typemarbre)
    {
        return view ('typemarbre.edit',compact('typemarbre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeMarbreRequest $request, TypeMarbre $typemarbre)
    {
        $typemarbre->update($request->all());
        return redirect()->route('typemarbre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeMarbre $typemarbre)
    {
        $typemarbre->delete();
        return redirect()->route('typemarbre.index');
    }
}
