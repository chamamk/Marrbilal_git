@extends('layout.main')
@section('contenue')
<div class="container">
    <h1>Modifier Fournisseur</h1>
    <form action="{{ route('fournisseur.update', $fournisseur->id) }}" method="POST">
        @method('put')
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="{{ $fournisseur->nom }}"  class="form-control"/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="{{ $fournisseur->prenom }}"  class="form-control"/>
        <label for="telephone">Téléphone</label>
        <input type="text" name="telephone" id="telephone" value="{{ $fournisseur->telephone }}"  class="form-control"/>
        <label for="comptebancaire">Compte Bancaire</label>
        <input type="text" name="comptebancaire" id="comptebancaire" value="{{ $fournisseur->comptebancaire}}"  class="form-control"/>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" value="{{ $fournisseur->adresse }}"  class="form-control"/>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" value="{{ $fournisseur->ville }}"  class="form-control"/>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
</div>
@endsection
