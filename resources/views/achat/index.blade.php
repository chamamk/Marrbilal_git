@extends('index')
@section('title')
   Achat 
@endsection
@section('main')
@include('partials.cards')
<div class="col-12">
    <div class="card mb-4 w-95">
      <div class="card-header pb-0 d-flex justify-content-between">
        <h6>Table des Achat</h6>
        <div class="input-group">
            <input id="search-input" type="search" class="form-control h-75 " placeholder="Search anything...">  
              <button id="search-button" type="button" class="btn btn-primary h-75">
            <i class="fa fa-search"></i>
              </button>
        </div>
        <div class="Ajouter-article">
                <a  href="/Achat/Ajouter" id="search-button" type="button" class="btn btn-success h-75 ms-5">
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
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Date d'achat</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Article</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Longueur</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Largeur</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Quantité</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Unité</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Prix</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Fournisseur</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Mode de paiement</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Date d'écheance</th>
                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                      <h6 class="mb-0 text-lg">1</h6>
                </td>
                <td class="align-middle text-center">
                  <p class="text-xs font-weight-bold mb-0">15/5/2021</p>
                </td>
                <td class="align-middle text-center">
                  <span class="text-xs font-weight-bold">granite</span>
                </td>
                <td class="align-middle text-center">
                    
                    <span class="text-xs font-weight-bold">250cm</span>
                  </td>
                  <td class="align-middle text-center">
                    
                    <span class="text-xs font-weight-bold">400cm</span>
                  </td>
                  <td class="align-middle text-center">
                    
                    <span class="text-xs font-weight-bold">5</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-xs font-weight-bold">unite</span>
                </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">8000DH</span>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">Chaimae</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">Cash</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">5/12/2021</span>
                <td class="align-middle text-center cursor-pointe">
                  <a href="/Achat/Modifier" class="text-secondary font-weight-bold text-xs px-2 px-2" role="button">
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
            </tbody>
          </table>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection