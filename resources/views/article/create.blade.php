@php
    use App\Models\TypeMarbre;
@endphp
@extends('index')
@section('title')
    Ajouter Article
@endsection
@section('main')
    @php
        $typeMarbres = TypeMarbre::all();
    @endphp
    {{-- @if ($errors->any())
  <ul>
      @foreach ($errors->all() as $error)
        <li>
          <div class="alert alert-danger" role="alert">
            {{$error}}
          </div>
        </li>
      @endforeach
  </ul>
@endif --}}
    <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-2">
                            <h6>Ajouter Article</h6>
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
                                        <option class="text-center">
                                            -----choiser type marbre-----
                                        </option>
                                        @foreach ($typeMarbres as $item)
                                            <option class="text-center" value="{{ $item->id }}">
                                                {{ $item->typemarbre }}
                                            </option>
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
                                    <input class="form-control" type="text" name="nomcommercial" id="nomcommercial" value="{{old('nomcommercial')}}">
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
                                    <input class="form-control" type="text" name="stockinitial" id="stockinitial" value="{{old('stockinitial')}}">
                                    @error('stockinitial')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stock" class="form-control-label">stock</label>
                                    <input class="form-control" type="text" name="stock" id="stock" value="{{old('stock')}}">
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
                                    <select class="form-control" type="text" name="unite" id="unite" value="{{old('unite')}}">
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
                                    <input class="form-control" type="text" name="prix" id="prix" value="{{old('prix')}}">
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
                                    <select class="form-control" type="text" name="active" id="active" value="{{old('active')}}">
                                        <option class="text-center">
                                            ----------Choisi----------
                                        </option>
                                        <option class="text-center" value="1">
                                            Oui
                                        </option>
                                        <option class="text-center" value="0">
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
                            <button type="submit" class="btn btn-primary btn-md ms-auto">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
