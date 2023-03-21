@extends('index')
@section('title')
   Article 
@endsection
@section('main')
@include('partials.cards')
<div class="col-12">
    <div class="card mb-4 w-95">
      <div class="card-header pb-0 d-flex justify-content-between">
        <h6>Table des Articles</h6>
        <div class="input-group">
            <input id="search-input" type="search" class="form-control h-75 " placeholder="Search anything...">  
              <button id="search-button" type="button" class="btn btn-primary h-75">
            <i class="fa fa-search"></i>
              </button>
        </div>
        <div class="Ajouter-article">
                <a  href="{{ route('article.create')}}" id="search-button" type="button" class="btn btn-success h-75 ms-5">
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
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Type de marbre</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Nom Commercial</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Stock initial</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Stock</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Unité</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Prix</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Active</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
                  @foreach ($articles as $item)
                  <tr>
                    <td class="text-center">
                          <h6 class="mb-0 text-lg">{{ $item->id }}</h6>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0">{{ $item->type_marbre_id }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-xs font-weight-bold">{{ $item->nomcommercial }}</span>
                    </td>
                    <td class="align-middle text-center">
                        
                        <span class="text-xs font-weight-bold">{{ $item->stockinitial }}</span>
                      </td>
                      <td class="align-middle text-center">
                        
                        <span class="text-xs font-weight-bold">{{ $item->stock }}</span>
                      </td>
                      <td class="align-middle text-center">
                        
                        <span class="text-xs font-weight-bold">{{ $item->unite }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-xs font-weight-bold">{{ $item->prix }} DH</span>
                      </td>
                        @if ($item->active == '0')
                            <td class="align-middle text-center">
                              <span class="badge badge-sm bg-gradient-danger">Non</span>
                            </td> 
                        @else
                            <td class="align-middle text-center">
                              <span class="badge badge-sm bg-gradient-success">Oui</span>
                            </td>
                        @endif
                    <td class="align-middle text-center cursor-pointe">
                      <a href="/Article/Modifier" class="text-secondary font-weight-bold text-xs px-2 px-2" role="button">
                        Modifier
                      </a>
                      <a class="text-secondary font-weight-bold text-xs px-2" role="button" >
                        Supprimer
                      </a>
                      <a class="text-secondary font-weight-bold text-xs px-2" role="button">
                        Details
                      </a>
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