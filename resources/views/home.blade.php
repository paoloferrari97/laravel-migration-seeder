@extends('layout.app')

@section('title', 'Homepage')

@section('main')

    <a href="{{ route('packages.index') }}">Visualizza i pacchetti vacanza!</a>

@endsection
