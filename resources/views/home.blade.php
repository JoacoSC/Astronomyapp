@extends('layouts/master')

@section('contenido')
<div class="text" style="margin-bottom: 25px;">
    <h2 style="text-align: center;">Bienvenido {{$teacher->name}}</h2>
    <div class="container">
        <div class="row" style="padding-top: 20px;">
            <div class="col-lg-12 offset-lg-0">
                <div class="card" style="background: url(&quot;assets/img/jupiter.jpg&quot;) center / cover no-repeat, rgba(255,255,255,0);border-radius: 20px;border-width: 1px;border-color: rgb(255,255,255);margin-bottom: 15px;margin-top: 0px;box-shadow: 1px 1px 5px rgb(74,74,74);">
                    <div class="card-body" style="background: rgba(0,0,0,0.8);padding: 20px;margin: 0px;border-radius: 20px;border-width: 1px;border-color: rgb(255,255,255);"><img src="assets/img/student.png" width="135px" style="height: 150px;">
                        <h4 class="card-title" style="margin-top: 10px;">Registrar estudiantes</h4>
                        <a href="{{ url('/registroEstudiantes') }}" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card" style="background: url(&quot;assets/img/marte.jpg&quot;) center / cover no-repeat, rgba(255,255,255,0);border-radius: 20px;border-width: 1px;border-color: rgb(255,255,255);margin-bottom: 15px;box-shadow: 1px 1px 5px rgb(38,38,38);">
                    <div class="card-body" style="background: rgba(0,0,0,0.8);padding: 20px;margin: 0px;border-radius: 20px;border-width: 1px;border-color: rgb(255,255,255);"><img src="assets/img/blackboard.png" width="135px" style="height: 150px;">
                        <h4 class="card-title" style="margin-top: 10px;">Crear clase</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
