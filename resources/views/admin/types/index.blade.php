

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Types</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->description }}</td>
                        <td>
                            <a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-primary">Edit</a>
                            <!-- Add delete form if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.types.create') }}" class="btn btn-success">Create New Type</a>
    </div>
@endsection
