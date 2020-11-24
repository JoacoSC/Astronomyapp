@extends('layouts/master')

@section('contenido')
<div class="text" style="margin-bottom: 25px;">
    <h2 style="text-align: center;">Crear clase {{-- {{$teacher->name}} --}}</h2>
    <div class="container">
        <div class="row" style="padding-top: 20px;">
            <div class="col-lg-12 offset-lg-0">
                
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email address</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="selectpicker" id="exampleFormControlSelect1" multiple>
                          @foreach ($alumnos as $alumno)
                          <option>{{$alumno->name}}</option>
                          @endforeach
                      </select>
                    </div>
                    
                  </form>

            </div>
        </div>
    </div>
</div>
@endsection