@extends('index')
@section('title')
    La caisse du Bon Commande
@endsection
@section('reactjs')
    @viteReactRefresh
    @vite(['resources/css/app.css' ,'resources/js/app.jsx' ])
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
@endsection
@section('main')
    <div id="app"></div>
@endsection

