@extends('/../layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Crea Nuovo Point
        </div>

        <div class="card-body">
            <form action="{{ url('point') }}" method="post">
                {!! csrf_field() !!}
                <label for="">Nome</label>
                <input type="text" name="name" id="name", class="form-control" required>
                <label for="">Indirizzo</label>
                <input type="text" name="address" id="address", class="form-control" required>
                <label for="">Città</label>
                <input type="text" name="city" id="city", class="form-control" required>
                <label for="">CAP</label>
                <input type="text" name="zip" id="zip", class="form-control" required>
                <label for="">Telefono</label>
                <input type="text" name="telephone" id="telephone", class="form-control" required>
                <br>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected></option>
                        @foreach ($services as $service)
                            <option value="">{{ $service->name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Seleziona i servizi da aggiungere</label>
                </div>
                <br>
                <input type="submit" value="Salva" class="btn btn-success">
            </form>
        </div>

    </div>
@stop
