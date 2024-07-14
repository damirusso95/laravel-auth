<!-- resources/views/admin/category/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Details</h1>
        <p> {{ $categoria->name }}</p>
        <p> {{ $categoria->icon }}</p>
        <p> {{ $categoria->description }}</p>
        <a href="{{ route('admin.categories.index', $categoria->id) }}" class="btn btn-primary">torna alla lista delle categorie</a>



    </div>
@endsection
