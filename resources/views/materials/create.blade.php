@extends('layouts.app')

@section('content')
<h1>Add Material</h1>
<form action="{{ route('materials.store') }}" method="POST">
  @csrf
  <div class="container">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <br />
    <div class="form-group">
      <label for="opening_balance">Opening Balance:</label>
      <input type="number" step="0.01" class="form-control" id="opening_balance" name="opening_balance">
    </div>
    <br />
    <button type="submit" class="btn btn-primary">Add Material</button>
  </div>
</form>
@endsection