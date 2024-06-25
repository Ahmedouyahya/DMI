<!-- resources/views/spesialite/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Specialty')

@section('content')
<div class="container">
    <h1>Edit Specialty</h1>
    <form action="{{ route('spesialite.update', $specialty->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $specialty->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $specialty->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
