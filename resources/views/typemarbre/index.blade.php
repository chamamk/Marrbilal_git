@extends('parameter.index')
@section('editing')

<div class="col-10">
    <div class="card mb-4">
        <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Table des Fournisseur</h6>
            <div class="Ajouter-Client">
                <a href="{{ route('typemarbre.create') }}" id="search-button" type="button"
                    class="btn btn-success h-75 ms-5">
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
                                <th
                                    class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                    #</th>
                                <th
                                    class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                    Type Marbre</th>
                                    <th
                                    class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($typesmarbre as $type)
                                
                            <tr>
                                <td class="text-center">
                                    <h6 class="mb-0 text-lg">{{ $type->id}}</h6>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $type->typemarbre }}</p>
                                </td>
                                <td class="align-middle text-center cursor-pointe">
                                    <form action="{{ route("typemarbre.destroy" , $type->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route("typemarbre.edit" , $type->id ) }}"
                                            class="btn btn-warning">
                                            <i class="fa fa-pen"></i></a>

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Voulez vous vraiment supprimer un fournisseur en cours ?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
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