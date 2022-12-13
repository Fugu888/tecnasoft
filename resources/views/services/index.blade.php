@extends('/../layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Lista Servizi</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome Servizio</th>
                                <th scope="col">Descrizione</th>
                                <th scope="col">Prezzo</th>
                                <th class="text-center" scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->price }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <a href="{{ url('/service/' . $service->id . '/edit') }}" class="btn btn-secondary btn-sm" title="Modifica">Modifica</a>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 mt-1 mt-md-0">
                                                <form method="POST" action="{{ url('/service/' . $service->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button onclick="return confirm('Eliminare il Servizio?')" type="submit" title="Elimina Point" class="btn btn-danger btn-sm">Elimina</button>
                                                </form>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ url('/service/create') }}" class="btn btn-success btn-sm" title="Aggiungi Nuovo Servizio">
                        Aggiungi Nuovo Servizio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
