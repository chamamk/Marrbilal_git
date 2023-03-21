@extends('index')
@section('title')
    Acceuil    
@endsection
@section('main')
@include('partials.cards')
<div class="row mt-0">
    <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card z-index-9 h-95">
        <div class="card-header pb-3 pt-4 bg-transparent">
          <h6 class="text-capitalize">Achets par moins</h6>
        </div>
        <div class="card-body p-3 h-100">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
      <div class="col-lg-5 mt-1">
              <div class="calendar"></div>
          </div>
  </div>
@endsection