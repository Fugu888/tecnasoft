@extends('/../layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Dettaglio Point
        </div>
        <div class="card-body">
            <p class="card-text"> <strong>{{$points->name}}</strong> </p>
            <p class="card-text">{{$points->address}}</p>
            <p class="card-text">{{$points->city}}</p>
            <p class="card-text">{{$points->zip}}</p>
            <p class="card-text">{{$points->telephone}}</p>
        </div>
    </div>
@endsection