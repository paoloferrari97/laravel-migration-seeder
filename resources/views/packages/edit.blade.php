@extends('layout.app')

@section('title', 'Modifica pacchetto vacanza')

@section('main')
    <h1 class="text-center">Modifica pacchetto vacanza</h1>

    <div class="container">
        <form action="{{ route('packages.update', $package->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="destinazione">Destinazione</label>
                <input type="text" class="form-control {{-- @error('destinazione') is-invalid @enderror --}}" id="destinazione" name="destinazione"
                    placeholder="Inserisci qui la destinazione!" value="{{ $package->destinazione }}">
            </div>
            {{-- @error('destinazione')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            <div class="form-group">
                <label for="prezzo">Prezzo</label>
                <input type="number" step="0.01" class="form-control {{-- @error('prezzo') is-invalid @enderror --}}" id="prezzo" name="prezzo"
                    placeholder="Inserisci qui il prezzo!" value="{{ $package->prezzo }}">
            </div>
            {{-- @error('prezzo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            <div class="form-group">
                <label for="giorni_permanenza">Giorni di Permanenza</label>
                <input type="number" class="form-control {{-- @error('giorni_permanenza') is-invalid @enderror --}}" id="giorni_permanenza"
                    name="giorni_permanenza" placeholder="Inserisci qui i giorni di permanenza!"
                    value="{{ $package->giorni_permanenza }}">
            </div>
            {{-- @error('giorni_permanenza')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            <div class="form-group">
                <label for="data_partenza">Data di partenza</label>
                <input type="date" class="form-control {{-- @error('data_partenza') is-invalid @enderror --}}" id="data_partenza" name="data_partenza"
                    value="{{ $package->data_partenza }}">
            </div>
            {{-- @error('data_partenza')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
