@extends('admin.layout')

@section('title')

@section('content')
    <h1>{{ Auth::user()->nom }}</h1>
@endsection
