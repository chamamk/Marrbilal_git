@extends('index')
@section('title')
    Ajouter Fournisseur
@endsection
@section('main')
    <form action="{{ route('fournisseur.store') }}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-2">
                            <h6>Ajouter Fournisseur</h6>
                            </p>
                            <a href="{{ route('fournisseur.index') }}" class="btn btn-warning btn-md ms-auto">Roteur</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Fournisseur</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomcomplet" class="form-control-label">Nom Complete de Fournisseur</label>
                                    <input class="form-control" type="text" name="nomcomplet" id="nomcomplet">
                                    @error('nomcomplet')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="comptebancaire" class="form-control-label">Compte Bancaire</label>
                                    <input class="form-control" type="text" name="comptebancaire" id="comptebancaire">
                                    @error('comptebancaire')
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
                                    <label for="telephone" class="form-control-label">Téléphone</label>
                                    <input class="form-control" type="text" name="telephone" id="telephone">
                                    @error('telephone')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="adresse" class="form-control-label">Adresse</label>
                                    <input class="form-control" type="text" name="adresse" id="adresse">
                                    @error('adresse')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ville" class="form-control-label">Ville</label>
                                    <input class="form-control" type="text" name="ville" id="ville">
                                    @error('ville')
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
