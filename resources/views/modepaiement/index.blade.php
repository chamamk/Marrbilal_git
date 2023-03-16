@extends('layout.main')
@section('contenue')

<h1>Liste des modes de paiement</h1>
<a href="{{ route('modePaiement.create') }}" class='btn btn-success'>Ajouter</a>
<table class="table table-fixed">
    <thead>
        <tr>
            <th>#</th>
            <th>Mode de paiement</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($modesPaiement as $modePaiement)
            <tr>
                <td>{{ $modePaiement->id }}</td>
                <td>{{ $modePaiement->modepaiement }}</td>
                <td>
                    <form action="{{ url('modePaiement/' . $modePaiement->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ url('modePaiement/' . $modePaiement->id . '/edit') }}"
                            class="bi bi-pencil-square btn btn-warning btn-sm"></a>
                        <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                            onclick="return confirm('Voulez vous vraiment supprimer un mode de paiement en cours ?')" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

