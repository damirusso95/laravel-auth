

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Type Details</h1>
        <p>ID: {{ $type->id }}</p>
        <p>Name: {{ $type->name }}</p>
        <p>Description: {{ $type->description }}</p>

        <a href="{{ route('admin.types.index') }}" class="btn btn-primary">Back to Types List</a>
    </div>
@endsection
