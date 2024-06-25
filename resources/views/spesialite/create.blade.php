<!-- resources/views/spesialite/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create Specialty')

@section('content')
<div class="container">
    <h1>Create Specialty</h1>
    <form action="{{ route('spesialite.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
