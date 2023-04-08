@php
    use App\Models\TypeMarbre;
@endphp
@extends('index')
@section('title')
    Modifier Article
@endsection
@section('main')
    @php
        $typeMarbres = TypeMarbre::all();
    @endphp
    <form action="{{ route('article.update', $article->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-2">
                            <h6>Modifier Article</h6>
                            </p>
                            <a href="{{ route('article.index') }}" class="btn btn-warning btn-md ms-auto">Retour</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Article</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type_marbre_id" class="form-control-label">Type de marbe</label>
                                    <select class="form-control" type="text" name="type_marbre_id" id="type_marbre_id">
                                        @foreach ($typeMarbres as $typemarbre)
                                            <option value="{{ $typemarbre->id }}"
                                                @php if($typemarbre->id==$article->type_marbre_id){echo('selected="selected"');} @endphp>
                                                {{ $typemarbre->typemarbre }}</option>
                                        @endforeach
                                    </select>
                                    @error('type_marbre_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomcommercial" class="form-control-label">Nom commercial</label>
                                    <input class="form-control" type="text" name="nomcommercial" id="nomcommercial"
                                        value="{{ $article->nomcommercial }}">
                                    @error('nomcommercial')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stockinitial" class="form-control-label">Stock Initial</label>
                                    <input class="form-control" type="number" name="stockinitial" id="stockinitial"
                                        value="{{ $article->stockinitial }}">
                                    @error('stockinitial')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stock" class="form-control-label">Stock</label>
                                    <input class="form-control" type="number" name="stock" id="stock"
                                        value="{{ $article->stock }}">
                                    @error('stock')
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
                                    <label for="unite" class="form-control-label">unité</label>
                                    <select class="form-control" type="text" name="unite" id="unite">
                                        <option value="{{ $article->unite }}"
                                            @php if($article->unite=="m²"){echo('selected="selected"');} @endphp>
                                            m²
                                        </option>
                                        <option value="{{ $article->unite }}"
                                            @php if($article->unite=="ml"){echo('selected="selected"');} @endphp>
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
                                        value="{{ $article->prix }}">
                                    @error('prix')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="active" class="form-control-label">Active</label>
                                    <select class="form-control" type="text" name="active" id="active">
                                        <option value="{{ $article->active }}"
                                            @php if($article->active=="1"){echo('selected="selected"');} @endphp>
                                            Oui
                                        </option>
                                        <option value="{{ $article->active }}"
                                            @php if($article->active=="0"){echo('selected="selected"');} @endphp>
                                                Non
                                        </option>
                                    </select>
                                    @error('active')
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
