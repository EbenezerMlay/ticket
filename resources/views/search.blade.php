@extends('layouts.app')
@section('content')
<div class="container">
    <div class= "Absolute-Center is-Responsive">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3>Search Results</h3>
                </div>
                <div class="card-body">
                  @if(isset($routes))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Bus</th>
                <th>Route From</th>
                <th>Route To</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($routes as $bus)
        <tr>
        <td>{{ $bus->name }}</td>
        <td>{{ $bus->Route_from }}</td>
        <td>{{ $bus->Route_to }}</td>
          <td>{{ $bus->Departure_Date }}</td>
        <td>{{ $bus->Departure_Time }}</td>
        <td><a href="{{ url('/display/ticket/' . $bus->id) }}">Book</a></td>
        @endforeach
        </tbody>
    </table>
    @endif
                </div>
            </div>
        </div>
    </div>
</div>

                 
    @endsection





