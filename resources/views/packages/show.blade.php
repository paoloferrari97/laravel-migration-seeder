@extends('layout.app')

@section('title', 'Pacchetto Vacanza')

@section('main')
    <ol>
        <li>Id: {{ $package->id }}</li>
        <li>Destinazione: {{ $package->destinazione }}</li>
        <li>Prezzo: {{ $package->prezzo }}</li>
        <li>Giorni di permanenza: {{ $package->giorni_permanenza }}</li>
        <li>Data di partenza: {{ $package->data_partenza }}</li>

        <form action="{{ route('packages.destroy', $package->id) }}" method='post'>
            @csrf
            @method('DELETE')
            <button type="submit" {{-- @click="cancel($event)" --}} class="btn btn-danger">!DELETE!</button>
        </form>

    </ol>
@endsection
