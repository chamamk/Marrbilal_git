@extends('index')
@section('title')
   Modifier Article  
@endsection
@section('main')
<form action="">
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-2"><h6>Modifier Article</h6></p>
            <a  href="/Article" class="btn btn-warning btn-md ms-auto">Roteur</a>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">Article</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Type de marbe</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nom commercial</label>
                <input class="form-control" type="email" name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Stock Initial</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Last name</label>
                <input class="form-control" type="text" name="">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">unité</label>
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
                <label for="example-text-input" class="form-control-label">Active</label>
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