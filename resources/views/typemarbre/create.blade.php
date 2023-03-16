@extends('layout.main')
@section('contenue')
<div class="container">
    <h1>Ajouter Fournisseur</h1>
    <form action="{{route('typemarbre.store')}}" method="POST">
        @csrf
        <label for="typemarbre">Type de marbre</label>
        <input type="text" name="typemarbre" id="typemarbre"  class="form-control"/>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection
