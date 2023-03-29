@php
    use App\Models\Article;
    use App\Models\Client;
    use App\Models\ModePaiement;
@endphp
@extends('index')
@section('title')
    Modifier Bon de commande
@endsection
@section('main')
    @php
        $articles = Article::all();
        $clients = Client::all();
        $modesPaiement = ModePaiement::all();
    @endphp
    <form action="{{ route('bonCommande.update', $bonCommande->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-2">
                            <h6>Modifier Bon de commande</h6>
                            </p>
                            <a href="{{ route('bonCommande.index') }}" class="btn btn-warning btn-md ms-auto">Roteur</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Bon de commande</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="datebc" class="form-control-label">Date de bon de commande</label>
                                    <input class="form-control" type="date" name="datebc" id="datebc"
                                        value="{{ $bonCommande->datebc }}">
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
                                                @php if($client->id==$bonCommande->client_id){echo('selected="selected"');} @endphp>
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
                                                @php if($article->id==$bonCommande->article_id){echo('selected="selected"');} @endphp>
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
                                    <label for="longueur" class="form-control-label">Longueur</label>
                                    <input class="form-control" type="number" name="longueur" id="longueur"
                                        value="{{ $bonCommande->longueur }}">
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
                                        value="{{ $bonCommande->largeur }}">
                                    @error('largeur')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pourcentageChute" class="form-control-label">Pourcentage de chute</label>
                                    <input class="form-control" type="number" name="pourcentageChute" id="pourcentageChute"
                                        value="{{ $bonCommande->pourcentageChute }}">
                                    @error('pourcentageChute')
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
                                        value="{{ $bonCommande->qte }}">
                                    @error('qte')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="unite" class="form-control-label">Unité</label>
                                    <select class="form-control" type="text" name="unite" id="unite">
                                        <option value="{{ $bonCommande->unite }}"
                                            @php if($bonCommande->unite=="m²"){echo('selected="selected"');} @endphp>
                                            m²
                                        </option>
                                        <option value="{{ $bonCommande->unite }}"
                                            @php if($bonCommande->unite=="ml"){echo('selected="selected"');} @endphp>
                                            ml
                                        </option>
                                    </select>
                                    @error('unite')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="prix" class="form-control-label">Prix</label>
                                    <input class="form-control" type="number" name="prix" id="prix"
                                        value="{{ $bonCommande->prix }}">
                                    @error('prix')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="avance" class="form-control-label">Avance</label>
                                    <input class="form-control" type="number" name="avance" id="avance"
                                        value="{{ $bonCommande->avance }}">
                                    @error('avance')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mode_paiement_id" class="form-control-label">Mode de paiement</label>
                                    <select class="form-control" type="text" name="mode_paiement_id"
                                        id="mode_paiement_id">
                                        @foreach ($modesPaiement as $modePaiement)
                                            <option value="{{ $modePaiement->id }}"
                                                @php if($modePaiement->id==$bonCommande->mode_paiement_id){echo('selected="selected"');} @endphp>
                                                {{ $modePaiement->modepaiement }}</option>
                                        @endforeach
                                    </select>
                                    @error('mode_paiement_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dateecheance" class="form-control-label">Date d'écheance</label>
                                    <input class="form-control" type="date" name="dateecheance" id="dateecheance"
                                        value="{{ $bonCommande->dateecheance }}">
                                    @error('dateecheance')
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
