@extends('parameter.index')
@section('editing')
    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
            <h3 class="mb-4">Votre Profile</h3>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nom complete</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password"class="form-control" value="{{old('password')}}">
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
