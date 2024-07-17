

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Type</h1>
        <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Name</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descrizione">Description</label>
                <textarea class="form-control" id="descrizione" name="descrizione"></textarea>
            </div>
            <div class="form-group">
                <label for="icona">Icon</label>
                <input type="text" class="form-control" id="icona" name="icona">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
