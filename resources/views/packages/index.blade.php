@extends('layout.app')

@section('title', 'Pacchetti vacanza')

@section('main')
    <h1 class="text-center">Pacchetti viaggi</h1>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Destinazione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Giorni di permanenza</th>
                    <th scope="col">Data di partenza</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacchetti as $package)
                    <tr>
                        <th scope="row">{{ $package->id }}</th>
                        <td>{{ $package->destinazione }}</td>
                        <td>{{ $package->prezzo }}</td>
                        <td>{{ $package->giorni_permanenza }}</td>
                        <td>{{ $package->data_partenza }}</td>
                        <td>
                            {{-- <a href="{{ route('packages.show', $package->id) }}">View</a> | <a
                                href="{{ route('packages.edit', $package->id) }}">Edit</a>
                            <form action="{{ route('packages.destroy', $package->id) }}" method='post'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" @click="cancel($event)" class="btn btn-danger">!DELETE!</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
