

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Boolfolios</h1>
    <div class="row">
        @foreach ($boolfolios as $boolfolio)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $boolfolio->nome }}</h5>
                    <p class="card-text"><strong>Autore:</strong> {{ $boolfolio->autore }}</p>
                    @if (Str::startsWith($boolfolio->cover_image, 'http'))
                        <img  src="{{ $boolfolio->cover_image }}" alt="" class="card-text card-img-top">                              
                    @else
                        <img  src="{{ asset('storage/' . $boolfolio->cover_image) }} " alt="" class="card-text card-img-top">

                    @endif
                    
                    <p class="card-text"><strong>Descrizione:</strong> {{ $boolfolio->descrizione }}</p>
                    <p class="card-text"><strong>Inizio:</strong> {{ $boolfolio->inizio }}</p>
                    <p class="card-text"><strong>Fine:</strong> {{ $boolfolio->fine }}</p>
                    <a href="{{ route('admin.boolfolios.edit', $boolfolio->id) }}" class="btn btn-warning">Modifica</a>
                    <a href="{{ route('admin.boolfolios.show', $boolfolio->id) }}" class="btn btn-primary">Mostra</a>


                    <form action="{{ route('admin.boolfolios.destroy', $boolfolio->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
