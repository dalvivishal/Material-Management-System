@extends('layouts.app')

@section('content')
    <h1>Add Inward/Outward Quantity</h1>
    <form action="{{ route('inward-outward.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="material_category">Material Category:</label>
            <select class="form-control" id="material_category" name="material_category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="material_id">Material:</label>
            <select class="form-control" id="material_id" name="material_id">
                @foreach($materials as $material)
                    <option value="{{ $material->id }}">{{ $material->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" step="0.01" class="form-control" id="quantity" name="quantity">
        </div>
        <button type="submit" class="btn btn-primary">Add Quantity</button>
    </form>
@endsection
