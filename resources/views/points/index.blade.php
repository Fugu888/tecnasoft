@extends('/../layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Lista Point Affiliati</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Indirizzo</th>
                                    <th scope="col">Città</th>
                                    <th scope="col">CAP</th>
                                    <th scope="col">Telefono</th>
                                    <th class="text-center" scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($points as $point)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $point->name }}</td>
                                        <td>{{ $point->address }}</td>
                                        <td>{{ $point->city }}</td>
                                        <td>{{ $point->zip }}</td>
                                        <td>{{ $point->telephone }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-4">
                                                    <a href="{{ url('/point/' . $point->id) }}" class="btn btn-primary btn-sm" title="Visualizza">Visualizza</a>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-4">
                                                    <a href="{{ url('/point/' . $point->id . '/edit') }}" class="btn btn-secondary btn-sm" title="Modifica">Modifica</a>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-4">
                                                    <form method="POST" action="{{ url('/point/' . $point->id) }}">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button onclick="return confirm('Eliminare il Point?')" type="submit" title="Elimina Servizio" class="btn btn-danger btn-sm">Elimina</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('/point/create') }}" class="btn btn-success btn-sm" title="Aggiungi Nuovo Point">
                            Aggiungi Nuovo Point
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
