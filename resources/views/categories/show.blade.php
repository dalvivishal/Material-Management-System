@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>
    <p><strong>Name:</strong> {{ $category->name }}</p>
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
    </form>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Go Back</a>
@endsection
