@extends('parameter.index')
@section('editing')
<div class="mx-5 my-5">
    <form action="{{ route('modepayment.store') }}" method="POST">
        @csrf
    <h3 class="mb-4">Ajouter Mode Paiement</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                  <label>Mode Paiement</label>
                  <input type="text" class="form-control" name="modepaiement">
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-primary">Ajouter</button>
    </div>
    </form>
</div>
@endsection
