@extends('/../layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Crea Nuovo servizio
        </div>
        <div class="card-body">
            <form action="{{url('service')}}" method="post">
                {!!csrf_field()!!}
            <label for="">Nome Servizio</label>
            <input type="text" name="name" id="name" class="form-control" required>
            <label for="">Descrizione</label>
            <input type="text" name="description" id="description" class="form-control" required>   	
            <label for="">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control" required>   	
            <br>
            <input type="submit" value="Salva" class="btn btn-success"> 
            </form>
        </div>
    </div>
@stop

