@php
    use App\Models\Article;
    use App\Models\Client;
    use App\Models\BonCommande;
@endphp
@extends('index')
@section('title')
    Modifier Bon de livraison
@endsection
@section('main')
    @php
        $articles = Article::all();
        $clients = Client::all();
        $bonsCommande = BonCommande::all();
    @endphp
    <form action="{{ route('bl.update', $bl->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-2">
                            <h6>Modifier Bon de livraison</h6>
                            </p>
                            <a href="{{ route('bl.index') }}" class="btn btn-warning btn-md ms-auto">Retour</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Bon de livraison</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="datebl" class="form-control-label">Date de bon de livraison</label>
                                    <input class="form-control" type="date" name="datebl" id="datebl"
                                        value="{{ $bl->datebl }}">
                                    @error('dateachat')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="client_id" class="form-control-label">Client</label>
                                    <select class="form-control" type="text" name="client_id" id="client_id">
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}"
                                                @php if($client->id==$bl->client_id){echo('selected="selected"');} @endphp>
                                                {{ $client->nomcomplete }}</option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="article_id" class="form-control-label">Article</label>
                                    <select class="form-control" type="text" name="article_id" id="article_id">
                                        @foreach ($articles as $article)
                                            <option value="{{ $article->id }}"
                                                @php if($article->id==$bl->article_id){echo('selected="selected"');} @endphp>
                                                {{ $article->nomcommercial }}</option>
                                        @endforeach
                                    </select>
                                    @error('article_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bon_commande_id" class="form-control-label">Bon de commande</label>
                                    <select class="form-control" type="text" name="bon_commande_id" id="bon_commande_id">
                                        @foreach ($bonsCommande as $bonCommande)
                                            <option class="text-center" value="{{ $bonCommande->id }}"
                                                @php if($bonCommande->id==$bl->bon_commande_id){echo('selected="selected"');} @endphp>
                                                {{ $bonCommande->id }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('bon_commande_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="longueur" class="form-control-label">Longueur</label>
                                    <input class="form-control" type="number" name="longueur" id="longueur"
                                        value="{{ $bl->longueur }}">
                                    @error('longueur')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="largeur" class="form-control-label">Largeur</label>
                                    <input class="form-control" type="number" name="largeur" id="largeur"
                                        value="{{ $bl->largeur }}">
                                    @error('largeur')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qte" class="form-control-label">Quantité</label>
                                    <input class="form-control" type="number" name="qte" id="qte"
                                        value="{{ $bl->qte }}">
                                    @error('qte')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="etat" class="form-control-label">Etat</label>
                                    <select class="form-control" type="text" name="etat" id="etat">
                                        <option value="{{ $bl->etat }}"
                                            @php if($bl->etat=="livré"){echo('selected="selected"');} @endphp>
                                            Livré
                                        </option>
                                        <option value="{{ $bl->etat }}"
                                            @php if($bl->etat=="annule"){echo('selected="selected"');} @endphp>
                                            Annulé
                                        </option>
                                    </select>
                                    @error('etat')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="isregle" class="form-control-label">Is Regle</label>
                                    <select class="form-control" type="text" name="isregle" id="isregle">
                                        <option value="{{ $bl->isregle }}"
                                            @php if($bl->etat=="1"){echo('selected="selected"');} @endphp>
                                            Oui
                                        </option>
                                        <option value="{{ $bl->isregle }}"
                                            @php if($bl->isregle=="0"){echo('selected="selected"');} @endphp>
                                            Non
                                        </option>
                                    </select>
                                    @error('isregle')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <form>
                            <button class="btn btn-primary btn-md ms-auto">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
