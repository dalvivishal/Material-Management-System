@extends('layouts.app')

@section('content')
    <h1>Edit Material</h1>
    <form action="{{ route('materials.update', $material->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $material->name }}">
          </div>
          <br />
          <div class="form-group">
              <label for="opening_balance">Opening Balance:</label>
              <input type="number" step="0.01" class="form-control" id="opening_balance" name="opening_balance" value="{{ $material->opening_balance }}">
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Update Material</button>
        </div>
    </form>
@endsection
