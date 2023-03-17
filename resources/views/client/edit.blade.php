@extends('layout.main')
@section('contenue')
<div class="container">
    <h1>Modifier client</h1>
    <form action="{{ route('client.update', $client->id) }}" method="POST">
        @method('put')
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ $client->nom }}"  class="form-control"/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="{{ $client->prenom }}"  class="form-control"/>
        <label for="cin">CIN</label>
        <input type="text" name="cin" id="cin" value="{{ $client->cin }}"  class="form-control"/>
        <label for="telephone">Téléphone</label>
        <input type="text" name="telephone" id="telephone" value="{{ $client->telephone }}"  class="form-control"/>
        <label for="comptebancaire">Compte Bancaire</label>
        <input type="text" name="comptebancaire" id="comptebancaire" value="{{ $client->comptebancaire}}"  class="form-control"/>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" value="{{ $client->adresse }}"  class="form-control"/>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" value="{{ $client->ville }}"  class="form-control"/>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
</div>
@endsection
