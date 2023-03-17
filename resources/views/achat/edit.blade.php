@php
    use App\Models\Article;
    use App\Models\Fournisseur;
    use App\Models\ModePaiement;
@endphp
@extends('layout.main')
@section('contenue')
    <div class="container">
        @php
            $articles = Article::all();
            $fournisseurs = Fournisseur::all();
            $modesPaiement = ModePaiement::all();
        @endphp
        <h1>Modifier un achat</h1>
        <form action="{{ route('achat.update', $achat->id) }}" method="POST">
            @method('put')
            @csrf
            <label for="dateachat">Date d'achat</label>
            <input type="date" name="dateachat" id="dateachat" value="{{ $achat->dateachat }} class="form-control" />
            <label for="article_id">Article</label>
            <select name="article_id" id="article_id" class="form-select">
                @foreach ($articles as $article)
                    <option value="{{ $article->id }}"
                        @php if($article->id==$achat->article_id){echo('selected="selected"');} @endphp>
                        {{ $article->nomcommercial }}</option>
                @endforeach
            </select>
            <label for="longueur">Longueur</label>
            <input type="number" name="longueur" id="longueur" value="{{ $achat->longueur }}" class="form-control" />
            <label for="largeur">Largeur</label>
            <input type="number" name="largeur" id="largeur" value="{{ $achat->largeur }}" class="form-control" />
            <label for="qte">Quantité</label>
            <input type="number" name="qte" id="qte" value="{{ $achat->qte }}" class="form-control" />
            <label for="unite">Unité</label>
            <input type="text" name="unite" id="unite" value="{{ $achat->unite }}" class="form-control" />
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" value="{{ $achat->prix }}" class="form-control" />
            <label for="fournisseur_id">Fournisseur</label>
            <select name="fournisseur_id" id="fournisseur_id" class="form-select">
                @foreach ($fournisseurs as $fournisseur)
                    <option value="{{ $fournisseur->id }}"
                        @php if($fournisseur->id==$achat->fournisseur_id){echo('selected="selected"');} @endphp>
                        {{ $fournisseur->nom }}{{ $fournisseur->prenom }}</option>
                @endforeach
            </select>
            <label for="mode_paiement_id">Article</label>
            <select name="mode_paiement_id" id="mode_paiement_id" class="form-select">
                @foreach ($modesPaiement as $modePaiement)
                    <option value="{{ $modePaiement->id }}"
                        @php if($modePaiement->id==$achat->mode_paiement_id){echo('selected="selected"');} @endphp>
                        {{ $modePaiement->modepaiement }}</option>
                @endforeach
            </select>
            <label for="dateecheance">Date d'écheance</label>
            <input type="date" name="dateecheance" id="dateecheance"
                value="{{ $achat->dateecheance }} class="form-control" />
            <button type="submit" class="btn btn-warning">Modifier</button>
        </form>
    </div>
@endsection
