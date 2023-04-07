@extends('parameter.index')
@section('editing')
    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
            <h3 class="mb-4">Votre Profile</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nom complete</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" required autofocus autocomplete="name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" required autocomplete="username">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"class="form-control" 
                            required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" 
                            required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a href="{{ route('login') }}">Already have account?</a>
                    </div>
                </div>
                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
