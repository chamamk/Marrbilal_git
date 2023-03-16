@extends('layout.main')
@section('contenue')
<div class="container">
    <h1>Modifier Type de marbre</h1>
    <form action="{{ route('typemarbre.update', $typemarbre->id) }}" method="POST">
        @method('put')
        @csrf
        <label for="typemarbre">Type de marbre</label>
        <input type="text" name="typemarbre" id="typemarbre" value="{{ $typemarbre->typemarbre }}"  class="form-control"/>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
</div>
@endsection
