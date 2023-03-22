@extends('parameter.index')
@section('editing')
    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
        <h3 class="mb-4">Votre Profile</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                      <label>Nom complete</label>
                      <input type="text" class="form-control" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" value="" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label>Telephone</label>
                      <input type="text" class="form-control" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" value="">
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary">Modifier</button>
        </div>
    </div>
@endsection