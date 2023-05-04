@extends('index')
@section('title')
    Bon de commande
@endsection
@section('main')
    @include('partials.cards')
    <div class="col-12">
        <div class="card mb-4 w-95">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Table des Bons de commande</h6>
                <div class="input-group">
                    <div class="col-lg-11">
                        <form class="d-flex" name="form3">
                            <input id="search-input" type="search" name="search3" id="search3" onchange="form3.submit()"
                                class="form-control h-75 " placeholder="Search anything...">
                            <button id="search-button" type="submit" class="btn btn-primary h-75">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="Ajouter-Bon-Commande">
                        <a href="{{ route('bonCommande.create') }}" id="search-button" type="button"
                            class="btn btn-success h-75 ms-5">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
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
                                        Date de bon de commande</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Client</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Article</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Longueur</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Largeur</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Quantité</th>

                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Pourcentage du chute</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Surface</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Unité</th>

                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Prix</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Total</th>

                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Avance</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Mode de paiement</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Date d'écheance</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bonsCommande as $bonCommande )
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-lg">{{ $bonCommande->id }}</h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $bonCommande->datebc }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $bonCommande->client->nomcomplete}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-xs font-weight-bold">{{ $bonCommande->article->nomcommercial }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $bonCommande->longueur }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $bonCommande->largeur }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $bonCommande->qte }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $bonCommande->pourcentageChute }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $bonCommande->longueur * $bonCommande->largeur }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $bonCommande->unite }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $bonCommande->prix }} DH</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ ($bonCommande->longueur * $bonCommande->largeur) * $bonCommande->qte * $bonCommande->prix  }} DH</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-xs font-weight-bold">{{ $bonCommande->avance}}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-xs font-weight-bold">{{ $bonCommande->mode_paiement->modepaiement }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $bonCommande->dateecheance }}</span>
                                        <td class="align-middle text-center cursor-pointe">
                                            <form action="{{ route('bonCommande.destroy', $bonCommande->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('bonCommande.edit', $bonCommande->id) }}"
                                                    class="btn btn-warning btn-sm" role="button">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button type="submit" class="bi bi-trash btn btn-danger btn-sm"
                                                    onclick="return confirm('Voulez vous vraiment supprimer un achat en cours ?')">
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
        <a href="{{url('/printviewbon')}}" class="btn btn-primary">Imprission des bons</a>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.btnprn').printPage();
            }
            );
        </script>
    </div>
@endsection
