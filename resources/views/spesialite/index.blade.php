<!-- resources/views/spesialite/index.blade.php -->








@extends('layouts.user_type.auth')


@section('content')

<div class="container">
    <h1>Specialties</h1>
    <a href="{{ route('spesialite.create') }}" class="btn btn-primary mb-3">Add New Specialty</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($specialties as $specialty)
                <tr>
                    <td>{{ $specialty->id }}</td>
                    <td>{{ $specialty->name }}</td>
                    <td>{{ $specialty->description }}</td>
                    <td>
                        <a href="{{ route('spesialite.show', $specialty->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('spesialite.edit', $specialty->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('spesialite.destroy', $specialty->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
