@extends('layouts.app')

@section('content')
    <h1>All Materials</h1>
    <a href="{{ route('materials.create') }}" class="btn btn-primary mb-2">Add Material</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Opening Balance</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materials as $material)
                <tr>
                    <th scope="row">{{ $material->id }}</th>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->opening_balance }}</td>
                    <td>
                        <a href="{{ route('materials.show', $material->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('materials.edit', $material->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this material?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
