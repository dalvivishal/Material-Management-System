@extends('layouts.app')

@section('content')
<div class="container">
  @if (!empty($material->name))
    <h1>Material: {{ $material->name }}</h1>
    <p>Opening Balance: {{ $material->opening_balance }}</p>
    @if (!empty($material->inwardOutwards))
      <h2>Inward/Outward Entries</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Quantity</th>
            <th>Type</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($material->inwardOutwards as $inwardOutward)
            <tr>
              <td>{{ $inwardOutward->date }}</td>
              <td>{{ $inwardOutward->quantity }}</td>
              <td>{{ $inwardOutward->quantity >= 0 ? 'Inward' : 'Outward' }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <h2>No Inward/Outward entries for this material yet!</h2>
    @endif
  @else
    <h2>No Material Found!</h2>
  @endif
</div>
@endsection