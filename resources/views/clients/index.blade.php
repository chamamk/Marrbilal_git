@extends('index')
@section('title')
   Clients
@endsection
@section('main')
@include('partials.cards')
<div class="col-12">
    <div class="card mb-4 w-95">
      <div class="card-header pb-0 d-flex justify-content-between">
        <h6>Table des Clients</h6>
        <div class="input-group">
            <input id="search-input" type="search" class="form-control h-75 " placeholder="Search anything...">  
              <button id="search-button" type="button" class="btn btn-primary h-75">
            <i class="fa fa-search"></i>
              </button>
        </div>
        <div class="Ajouter-Client">
                <a  href="{{ route('clients.create') }}" id="search-button" type="button" class="btn btn-success h-75 ms-5">
                        <i class="fa fa-plus"></i>
                </a>
        </div>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="height: 400px;overflow-y: scroll;">
          <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Nom complet de Client</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">CIN</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Téléphone</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Compte Bancaire</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Adresse</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Ville</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($clients as $item)
              <tr>
                <td class="text-center">
                      <h6 class="mb-0 text-lg">{{ $item->id }}</h6>
                </td>
                <td class="align-middle text-center">
                  <p class="text-xs font-weight-bold mb-0">{{ $item->nomcomplete }}</p>
                </td>
                <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">{{ $item->cin }}</span>
                  </td>
                  <td class="align-middle text-center">
                    
                    <span class="text-xs font-weight-bold">{{ $item->telephone }}</span>
                  </td>
                  <td class="align-middle text-center">
                    
                    <span class="text-xs font-weight-bold">{{ $item->comptebancaire }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">{{ $item->adresse }}</span>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">{{ $item->ville }}</span>
                  </td>
                <td class="align-middle text-center cursor-pointe">
                  <a href="{{ route('clients.edit', $item->id )}}" class="text-secondary font-weight-bold text-xs px-2 px-2" role="button">
                    Modifier
                  </a>
                  <form action="{{ route('clients.destroy', $item->id )}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="badge badge-sm bg-gradient-danger border-0"
                        onclick="return confirm('Voulez vous vraiment supprimer un client en cours ?')" >supprimer<button>
                </form>
                  
                </td>
              </tr>
              @endforeach
            
            </tbody>
          </table>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection