@extends('index')
@section('title')
    La caisse du Bon Commande
@endsection
@section('reactjs')
    @viteReactRefresh
    @vite(['resources/css/app.css' ,'resources/js/app.jsx' ])
@endsection
@section('main')
    <div id="app"></div>
@endsection

