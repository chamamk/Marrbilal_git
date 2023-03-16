@extends('layout.main')
@section('contenue')

<h1>Liste des fournisseurs</h1>
<a href="{{ route('fournisseur.create') }}" class='btn btn-success'>Ajouter</a>
<table class="table table-fixed">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom Fournisseur</th>
            <th>Prénom Fournisseur</th>
            <th>Téléphone</th>
            <th>Compte Bancaire</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fournisseurs as $fournisseur)
            <tr>
                <td>{{ $fournisseur->id }}</td>
                <td>{{ $fournisseur->nom }}</td>
                <td>{{ $fournisseur->prenom }}</td>
                <td>{{ $fournisseur->telephone }}</td>
                <td>{{ $fournisseur->comptebancaire }}</td>
                <td>{{ $fournisseur->adresse }}</td>
                <td>{{ $fournisseur->ville }}</td>
                <td>
                    <form action="{{ url('fournisseur/' . $fournisseur->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ url('fournisseur/' . $fournisseur->id . '/edit') }}"
                            class="bi bi-pencil-square btn btn-warning btn-sm"></a>
                        <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                            onclick="return confirm('Voulez vous vraiment supprimer un fournisseur en cours ?')" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

