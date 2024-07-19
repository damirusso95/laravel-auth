@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Project</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.boolfolios.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Inserisci Nome</label>
                    <input type="text" class="form-control" id="" placeholder="nome" name="nome">
                </div>

                <div class="mb-3">
                    <label class="form-label">Inserisci Autore</label>
                    <input type="text" class="form-control" id="" placeholder="Autore" name="autore">
                </div>

                <div class="mb-3">
                    <label class="form-label">Inserisci data inizio</label>
                    <input type="date" class="form-control" id="" placeholder="inizio" name="inizio">
                </div>

                <div class="mb-3">
                    <label class="form-label">Inserisci data fine</label>
                    <input type="date" class="form-control" id="" placeholder="fine" name="fine">
                </div>

                <div class="mb-3">
                    <label class="form-label">Inserisci Descrizione</label>
                    <textarea class="form-control" id="descrizione" placeholder="descrizione" name="descrizione"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoria</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Carica Immagine di Copertina</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image">
                </div>

                <button type="submit" class="btn btn-primary">Pusha</button>
            </form>
        </div>
    </div>
</div>
@endsection

