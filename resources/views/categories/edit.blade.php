@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
@endsection
