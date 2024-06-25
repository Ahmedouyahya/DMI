<!-- resources/views/spesialite/show.blade.php -->

@extends('layouts.app')

@section('title', 'Specialty Details')

@section('content')
<div class="container">
    <h1>Specialty Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $specialty->name }}
        </div>
        <div class="card-body">
            <p>{{ $specialty->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('spesialite.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
