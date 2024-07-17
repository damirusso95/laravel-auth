@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Boolfolio</h1>

    <form action="{{ route('admin.boolfolios.update', $boolfolio->id) }}" method="POST">
        @csrf <!-- Token CSRF per la sicurezza -->

        
        @method('PUT')

        <div class="form-group">
            <label for="autore">Autore</label>
            <input type="text" class="form-control" id="autore" name="autore" value="{{ $boolfolio->autore }}">
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $boolfolio->nome }}">
        </div>

        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <textarea class="form-control" id="descrizione" name="descrizione" rows="3">{{ $boolfolio->descrizione }}</textarea>
        </div>

        <div class="form-group">
            <label for="inizio">Data di inizio</label>
            <input type="date" class="form-control" id="inizio" name="inizio" value="{{ $boolfolio->inizio }}">
        </div>

        <div class="form-group">
            <label for="fine">Data di fine</label>
            <input type="date" class="form-control" id="fine" name="fine" value="{{ $boolfolio->fine }}">
        </div>


        <button type="submit" class="btn btn-primary">Salva modifiche</button>
        <a href="{{ route('admin.boolfolios.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
