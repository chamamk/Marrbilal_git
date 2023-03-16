@extends('layout.main')
@section('contenue')
<div class="container">
    <h1>Ajouter Mode de paiement</h1>
    <form action="{{route('modePaiement.store')}}" method="POST">
        @csrf
        <label for="modepaiement">Mode de paiement</label>
        <input type="text" name="modepaiement" id="modepaiement"  class="form-control"/>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection
