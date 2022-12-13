@extends('/../layout')
@section('content')
    <div class="card">
        <div class="card-header">
           Modifica il Point
        </div>
        <div class="card-body">
            <form action="{{ url('point/' . $points->id) }}" method="post">
                {!!csrf_field()!!}
                @method("PATCH")
               <input type="hidden" name="id" id="id" value="{{$points->id}}">
               <label for="">Nome</label>
               <input type="text" name="name" id="name" value="{{$points->name}}" class="form-control" required>
               <label for="">Indirizzo</label>
               <input type="text" name="address" id="address" value="{{$points->address}}" class="form-control" required>   	
               <label for="">Città</label>
               <input type="text" name="city" id="city" value="{{$points->city}}" class="form-control" required>   	
               <label for="">CAP</label>
               <input type="text" name="zip" id="zip" value="{{$points->zip}}" class="form-control" required>   	
               <label for="">Telefono</label>
               <input type="text" name="telephone" id="telephone" value="{{$points->telephone}}" class="form-control" required>
               <br>
               
               <input type="submit" value="Modifica" class="btn btn-success"> 
            </form>

        </div>
    </div>
    
@endsection