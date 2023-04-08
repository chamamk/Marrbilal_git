@php
    use App\Models\Article;
    use App\Models\Client;
    use App\Models\BonCommande;
@endphp
@extends('index')
@section('title')
    Ajouter Bon de livraison
@endsection
@section('main')
    @php
        $articles = Article::all();
        $clients = Client::all();
        $bonsCommande = BonCommande::all();
    @endphp
    <form action="{{ route('bl.store') }}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-2">
                            <h6>Ajouter Bon de livraison</h6>
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
                                    <input class="form-control" type="date" name="datebl" id="datebl">
                                    @error('datebl')
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
                                            <option class="text-center" value="{{ $client->id }}">
                                                {{ $client->nomcomplete }}
                                            </option>
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
                                            <option class="text-center" value="{{ $article->id }}">
                                                {{ $article->nomcommercial }}
                                            </option>
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
                                            <option class="text-center" value="{{ $bonCommande->id }}">
                                                {{ $bonCommande->id}}
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
                                    <input class="form-control" type="number" name="longueur" id="longueur">
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
                                    <input class="form-control" type="number" name="largeur" id="largeur">
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
                                    <input class="form-control" type="number" name="qte" id="qte">
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
                                        <option class="text-center">
                                            -----Etat-----
                                        </option>
                                        <option class="text-center" value="livré">
                                            Livré
                                        </option>
                                        <option class="text-center" value="annule">
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
                                    <label for="isregle" class="form-control-label">Is regle</label>
                                    <select class="form-control" type="text" name="isregle" id="isregle">
                                        <option class="text-center">
                                            -----IsRegle-----
                                        </option>
                                        <option class="text-center" value="1">
                                            Oui
                                        </option>
                                        <option class="text-center" value="0">
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
                        <hr class="horizontal dark">
                        <form>
                            <button class="btn btn-primary btn-md ms-auto">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
