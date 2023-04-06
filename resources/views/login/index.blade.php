@extends('index')
@section('title')
    Login
@endsection
@section('main')
    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
            <div class="card-header">
                <div class=" card-body">
                    <form action="{{ route('accueil') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password"class="form-control"
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Login" class="btn btn-success">
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection
