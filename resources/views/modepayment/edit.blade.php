@extends('parameter.index')
@section('editing')
<div class="mx-5 my-5">
    <form action="{{ route('modepayment.update' , $modepayment->id) }}" method="POST">
        @csrf
        @method('PUT')
    <h3 class="mb-4">Modifier Mode Payment</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                  <label>Mode Payment</label>
                  <input type="text" class="form-control" name="modepaiement" value="{{ $modepayment->modepaiement }}" >
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-primary">modifier</button>
    </div>
    </form>
</div>
@endsection