@extends('layout.main')
@section('contenue')

<h1>Liste des Types de marbre</h1>
<a href="{{ route('typemarbre.create') }}" class='btn btn-success'>Ajouter</a>
<table class="table table-fixed">
    <thead>
        <tr>
            <th>#</th>
            <th>Type de Marbre</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($typesmarbre as $typemarbre)
            <tr>
                <td>{{ $typemarbre->id }}</td>
                <td>{{ $typemarbre->typemarbre }}</td>
                <td>
                    <form action="{{ url('typemarbre/' . $typemarbre->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ url('typemarbre/' . $typemarbre->id . '/edit') }}"
                            class="bi bi-pencil-square btn btn-warning btn-sm"></a>
                        <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                            onclick="return confirm('Voulez vous vraiment supprimer un type de marbre en cours ?')" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

