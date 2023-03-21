@extends('index')
@section('title')
   Modifier Achat  
@endsection
@section('main')
<form>
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-2"><h6>Modifier Achat</h6></p>
            <a  href="/Achat" class="btn btn-warning btn-md ms-auto">Roteur</a>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">Achat</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Date d'achat</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Article</label>
                <input class="form-control" type="email" name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Longueur</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Largeur</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Quantité</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Unité</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Prix</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Fournisseur</label>
                  <input class="form-control" type="text" name="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Mode de paiement</label>
                  <input class="form-control" type="text" name="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Date d'écheance</label>
                  <input class="form-control" type="text" name="">
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