@php
    use App\Models\Article;
    use App\Models\Fournisseur;
    use App\Models\ModePaiement;
@endphp
@extends('index')
@section('title')
    Ajouter Achat
@endsection
@section('main')
    @php
        $articles = Article::all();
        $fournisseurs = Fournisseur::all();
        $modesPaiement = ModePaiement::all();
    @endphp
    <form action="{{ route('achat.store') }}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-2">
                            <h6>Ajouter Achat</h6>
                            </p>
                            <a href="{{ route('achat.index') }}" class="btn btn-warning btn-md ms-auto">Roteur</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Achat</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dateachat" class="form-control-label">Date d'achat</label>
                                    <input class="form-control" type="date" name="dateachat" id="dateachat">
                                    @error('dateachat')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                                    <label for="unite" class="form-control-label">Unité</label>
                                    <select class="form-control" type="text" name="unite" id="unité">
                                        <option class="text-center">
                                            -----unité-----
                                        </option>
                                        <option class="text-center" value="m²">
                                            m²
                                        </option>
                                        <option class="text-center" value="ml">
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
                                    <input class="form-control" type="number" name="prix" id="prix">
                                    @error('prix')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fournisseur_id" class="form-control-label">Fournisseur</label>
                                    <select class="form-control" type="text" name="fournisseur_id" id="fournisseur_id">
                                        @foreach ($fournisseurs as $fournisseur)
                                            <option class="text-center" value="{{ $fournisseur->id }}">
                                                {{ $fournisseur->nomcomplet }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('fournisseur_id')
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
                                            <option class="text-center" value="{{ $modePaiement->id }}">
                                                {{ $modePaiement->modepaiement }}
                                            </option>
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
                                    <input class="form-control" type="date" name="dateecheance" id="dateecheance">
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
                            <button class="btn btn-primary btn-md ms-auto">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
