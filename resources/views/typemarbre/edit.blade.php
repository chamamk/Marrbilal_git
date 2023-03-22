@extends('parameter.index')
@section('editing')
<div class="mx-5 my-5">
    <form action="{{ route('typemarbre.update' , $typemarbre->id) }}" method="POST">
        @csrf
        @method('PUT')
    <h3 class="mb-4">Modifier Type Marbre</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                  <label>Type Marbre</label>
                  <input type="text" class="form-control" name="typemarbre" value="{{ $typemarbre->typemarbre }}" >
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-primary">Modifier</button>
    </div>
    </form>
</div>
@endsection