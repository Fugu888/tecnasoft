@extends('/../layout')
@section('content')
    <div class="card">
        <div class="card-header">
           Modifica il Servizio
        </div>
        <div class="card-body">
            <form action="{{ url('service/' . $services->id) }}" method="post">
                {!!csrf_field()!!}
                @method("PATCH")
               <input type="hidden" name="id" id="id" value="{{$services->id}}" required>
               <label for="">Nome Servizio</label>
               <input type="text" name="name" id="name" value="{{$services->name}}" class="form-control" required>
               <label for="">Descrizione</label>
               <input type="text" name="description" id="description" value="{{$services->description}}" class="form-control" required>   	
               <label for="">Prezzo</label>
               <input type="text" name="price" id="price" value="{{$services->price}}" class="form-control" required>   	
               <br>
               <input type="submit" value="Modifica" class="btn btn-success"> 
            </form>
        </div>
    </div>
@endsection

