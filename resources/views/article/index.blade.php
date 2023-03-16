@extends('layout.main')
@section('contenue')

<h1>Liste des Articles</h1>
<a href="{{ route('article.create') }}" class='btn btn-success'>Ajouter</a>
<table class="table table-fixed">
    <thead>
        <tr>
            <th>#</th>
            <th>Type de marbre</th>
            <th>Nom Commercial</th>
            <th>Stock initial</th>
            <th>Stock</th>
            <th>Unité</th>
            <th>Prix</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->typemarbre}}</td>
                <td>{{ $article->nomcommercial }}</td>
                <td>{{ $article->stockinitial }}</td>
                <td>{{ $article->stock }}</td>
                <td>{{ $article->unite }}</td>
                <td>{{ $article->prix }}</td>
                <td>{{ $article->active }}</td>
                <td>
                    <form action="{{ url('article/' . $article->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ url('article/' . $article->id . '/edit') }}"
                            class="bi bi-pencil-square btn btn-warning btn-sm"></a>
                        <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                            onclick="return confirm('Voulez vous vraiment supprimer un article en cours ?')" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

