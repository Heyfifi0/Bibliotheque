@extends('admin.layout')

@section('title')

@section('content')
    <h1>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h1>
    <h2>Statut : {{ Auth::user()->statut }}</h2>
@endsection
