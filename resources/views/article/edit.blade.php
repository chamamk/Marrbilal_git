@php
    use App\Models\TypeMarbre;
@endphp
@extends('layout.main')
@section('contenue')
    <div class="container">
        @php
            $typesmarbre = TypeMarbre::all();
        @endphp
        <h1>Ajouter Article</h1>
        <form action="{{ route('article.update', $article->id) }}" method="POST">
            @csrf
            <label for="nomcommercial">Nom commercial</label>
            <input type="text" name="nomcommercial" id="nomcommercial" value="{{ $article->nomcommercial }}"
                class="form-control" />
            <label for="type_marbre_id">Type de marbre</label>
            <select name="type_marbre_id" id="type_marbre_id" class="form-select">
                @foreach ($typesmarbre as $typemarbre)
                    <option value="{{ $typemarbre->id }}"
                        @php if($typemarbre->id==$article->type_marbre_id){echo('selected="selected"');} @endphp>
                        {{ $typemarbre->typemarbre }}</option>
                @endforeach
            </select>
            <label for="stockinitial">Stock initial</label>
            <input type="number" name="stockinitial" id="stockinitial" value="{{ $article->stockinitial }}"
                class="form-control" />
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" value="{{ $article->stock }}" class="form-control" />
            <label for="unite">Unité</label>
            <input type="text" name="unite" id="unite" value="{{ $article->unite }}" class="form-control" />
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" value="{{ $article->prix }}" class="form-control" />
            Active : <input type="checkbox" value="1" name="active" id="active"><br>
            <button type="submit" class="btn btn-warning">Modifier</button>
        </form>
    </div>
@endsection
