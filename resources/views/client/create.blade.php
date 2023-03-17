@extends('layout.main')
@section('contenue')
<div class="container">
    <h1>Ajouter Client</h1>
    <form action="{{route('client.store')}}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"  class="form-control"/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom"  class="form-control"/>
        <label for="cin">CIN</label>
        <input type="text" name="cin" id="cin"  class="form-control"/>
        <label for="telephone">Téléphone</label>
        <input type="text" name="telephone" id="telephone"  class="form-control"/>
        <label for="comptebancaire">Compte Bancaire</label>
        <input type="text" name="comptebancaire" id="comptebancaire"  class="form-control"/>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse"  class="form-control"/>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville"  class="form-control"/>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection
