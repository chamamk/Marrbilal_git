@extends('layout.main')
@section('contenue')

<h1>Liste des Achats</h1>
<a href="{{ route('achat.create') }}" class='btn btn-success'>Ajouter</a>
<table class="table table-fixed">
    <thead>
        <tr>
            <th>#</th>
            <th>Date d'achat</th>
            <th>Article</th>
            <th>Longueur</th>
            <th>Largeur</th>
            <th>Quantité</th>
            <th>Unité</th>
            <th>Prix</th>
            <th>Fournisseur</th>
            <th>Mode de paiement</th>
            <th>Date d'écheance</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($achats as $achat)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $achat->dateachat}}</td>
                <td>{{ $achat->article->nomcommercial }}</td>
                <td>{{ $achat->longueur }}</td>
                <td>{{ $achat->largeur }}</td>
                <td>{{ $achat->qte }}</td>
                <td>{{ $achat->unite }}</td>
                <td>{{ $achat->prix }}</td>
                <td>{{ $achat->fournisseur->nom }} {{ $achat->fournisseur->prenom }}</td>
                <td>{{ $achat->mode_paiement->modepaiement }}</td>
                <td>{{ $achat->dateecheance}}</td>
                <td>
                    <form action="{{ url('achat/' . $achat->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ url('achat/' . $achat->id . '/edit') }}"
                            class="bi bi-pencil-square btn btn-warning btn-sm"></a>
                        <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                            onclick="return confirm('Voulez vous vraiment supprimer un achat en cours ?')" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

