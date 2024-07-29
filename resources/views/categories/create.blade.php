@extends('layouts.app')

@section('content')
    <h1>Add Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection
