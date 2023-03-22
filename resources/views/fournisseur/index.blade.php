@extends('index')
@section('title')
    Fournisseur
@endsection
@section('main')
    @include('partials.cards')
    <div class="col-12">
        <div class="card mb-4 w-95">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Table des Fournisseur</h6>
                <div class="input-group">
                    <input id="search-input" type="search" class="form-control h-75 " placeholder="Search anything...">
                    <button id="search-button" type="button" class="btn btn-primary h-75">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="Ajouter-Client">
                    <a href="{{ route('fournisseur.create') }}" id="search-button" type="button"
                        class="btn btn-success h-75 ms-5">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar" style="height: 400px;overflow-y: scroll;">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        #</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Nom complet de Fournisseur</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Téléphone</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Compte Bancaire</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Adresse</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Ville</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fournisseurs as $fournisseur)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-lg">{{ $fournisseur->id }}</h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $fournisseur->nomcomplet }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $fournisseur->telephone }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $fournisseur->comptebancaire }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $fournisseur->adresse }} </span>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $fournisseur->ville }}</span>
                                        </td>
                                        <td class="align-middle text-center cursor-pointe">

                                            <form action="{{ route('fournisseur.destroy', $fournisseur->id) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('fournisseur.edit', $fournisseur->id) }}"
                                                    class="btn btn-warning btn-sm" role="button">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                                                    onclick="return confirm('Voulez vous vraiment supprimer un fournisseur en cours ?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
