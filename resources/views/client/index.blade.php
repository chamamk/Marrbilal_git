@extends('layout.main')
@section('contenue')

<h1>Liste des clients</h1>
<a href="{{ route('client.create') }}" class='btn btn-success'>Ajouter</a>
<table class="table table-fixed">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom de client complet</th>
            <th>CIN</th>
            <th>Téléphone</th>
            <th>Compte Bancaire</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->nom }} {{ $client->prenom }}</td>
                <td>{{ $client->cin }}</td>
                <td>{{ $client->telephone }}</td>
                <td>{{ $client->comptebancaire }}</td>
                <td>{{ $client->adresse }}</td>
                <td>{{ $client->ville }}</td>
                <td>
                    <form action="{{ url('client/' . $client->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ url('client/' . $client->id . '/edit') }}"
                            class="bi bi-pencil-square btn btn-warning btn-sm"></a>
                        <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                            onclick="return confirm('Voulez vous vraiment supprimer un client en cours ?')" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

