@extends('index')
@section('title')
    Parameter
@endsection
@section('main')
<section class="py-5">
    <div class="container">
        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            @include('partials.navpar')
            @yield('editing')
            </div>
        </div>
    </div>
</section>
@endsection