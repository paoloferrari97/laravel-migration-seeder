@extends('layout.app')

@section('title', 'Homepage')

@section('main')

    <a href="{{ route('packages.index') }}">Visualizza i pacchetti vacanza!</a> <br>
    <a href="{{ route('packages.create') }}">Crea un nuovo pacchetto vacanza!</a>

@endsection
