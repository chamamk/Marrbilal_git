@extends('layout.main')
@section('contenue')
<div class="container">
    <h1>Modifier mode de paiement</h1>
    <form action="{{ route('modePaiement.update', $modePaiement->id) }}" method="POST">
        @method('put')
        @csrf
        <label for="modepaiement">Mode de paiement</label>
        <input type="text" name="modepaiement" id="modepaiement" value="{{ $modePaiement->modepaiement }}"  class="form-control"/>
       <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
</div>
@endsection
