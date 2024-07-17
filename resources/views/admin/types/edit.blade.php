

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Type</h1>
        <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Name</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $type->name }}" required>
            </div>
            <div class="form-group">
                <label for="descrizione">Description</label>
                <textarea class="form-control" id="descrizione" name="descrizione">{{ $type->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="icona">Icon</label>
                <input type="text" class="form-control" id="icona" name="icona" value="{{ $type->icona }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
