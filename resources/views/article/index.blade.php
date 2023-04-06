@extends('index')
@section('title')
    Article
@endsection
@section('main')
    @include('partials.cards')
    <div class="col-12">
        <div class="card mb-4 w-95">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Table des Articles</h6>
                <div class="input-group">
                    <div class="col-lg-11">
                        <form class="d-flex" name="form1">
                            <input id="search-input" type="search" name="search1" id="search1" onchange="form1.submit()"
                                class="form-control h-75 " placeholder="Search anything...">
                            <button id="search-button" type="submit" class="btn btn-primary h-75">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="Ajouter-Article">
                        <a href="{{ route('article.create') }}" id="search-button" type="button"
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
                                        Type de marbre</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Nom Commercial</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Stock initial</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Stock</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Unité</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Prix</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Active</th>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-lg">{{ $article->id }}</h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $article->type_marbre_id }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $article->nomcommercial }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $article->stockinitial }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $article->stock }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <span class="text-xs font-weight-bold">{{ $article->unite }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs font-weight-bold">{{ $article->prix }} DH</span>
                                        </td>
                                        @if ($article->active == '0')
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-danger">Non</span>
                                            </td>
                                        @else
                                            <td class="align-middle text-center">
                                                <span class="badge badge-sm bg-gradient-success">Oui</span>
                                            </td>
                                        @endif
                                        <td class="align-middle text-center cursor-pointe">
                                            <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('article.edit', $article->id) }}"
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
