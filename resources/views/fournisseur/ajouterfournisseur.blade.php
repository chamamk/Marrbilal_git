@extends('index')
@section('title')
   Ajouter Fournisseur  
@endsection
@section('main')
<form>
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-2"><h6>Ajouter Fournisseur</h6></p>
            <a  href="/Fournisseur" class="btn btn-warning btn-md ms-auto">Roteur</a>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">Fournisseur</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nom Complete de Fournisseur</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Compte Bancaire</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Téléphone</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Adresse</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Ville</label>
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