@extends('index')
@section('title')
   Modifier Clients  
@endsection
@section('main')
<form action="{{ route('clients.update' , $client->id) }}" method="POST">
  @csrf
  @method('PUT')
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-2"><h6>Modifier Client</h6></p>
            <a  href="{{ route('clients.index') }}" class="btn btn-warning btn-md ms-auto">Roteur</a>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">Client</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label text-center">Nom Complete</label>
                <input class="form-control" type="text" name="nomcomplete" value="{{ $client->nomcomplete }}" >
                @error('nomcomplete')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">CIN</label>
                <input class="form-control" type="text" name="cin" value="{{ $client->cin }}" >
                @error('cin')
                <div class="text-danger">
                  {{ $message }}
              </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Compte Bancaire</label>
                <input class="form-control" type="text" name="comptebancaire" value="{{ $client->comptebancaire }}" >
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
                <label for="example-text-input" class="form-control-label">Téléphone</label>
                <input class="form-control" type="text" name="telephone" value="{{ $client->telephone }}" >
                @error('telephone')
                <div class="text-danger">
                  {{ $message }}
              </div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Adresse</label>
                <input class="form-control" type="text" name="adresse" value="{{ $client->adresse }}" >
                @error('adresse')
                <div class="text-danger">
                  {{ $message }}
              </div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Ville</label>
                <input class="form-control" type="text" name="ville" value="{{ $client->ville }}" >
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
            <button type="submit" class="btn btn-primary btn-md ms-auto">Modifier</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection