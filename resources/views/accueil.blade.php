@extends('index')
@section('title',"Acceuil")
@section('main')
@include('partials.cards')
<div class="row">
    <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card z-index-9 h-95">
        <div class="card-header bg-transparent">
          <h6 class="text-capitalize">Achets par moins</h6>
          <div class="float-end">
            <a href="{{ route('caisse') }}" class="btn btn-primary btn-sm my-0 py-1 px-2">
              Caisse
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
      <div class="col-lg-5 mt-5">
              <div class="calendar"></div>
          </div>
  </div>
@endsection
