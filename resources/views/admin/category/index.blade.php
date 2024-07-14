<!-- resources/views/admin/category/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
        <ul>
            @foreach($categoria as $categoria)
                <li>
                    <a href="{{ route('admin.categories.show', $categoria->id) }}">
                        {{ $categoria->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
