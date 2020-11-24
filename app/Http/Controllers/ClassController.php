<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class ClassController extends Controller
{
    public function datosProfesorClase()
    {
        $teacher = Auth::user();
        return view('crearClase',compact('teacher'));
    }

    public function obtenerAlumnos()
    {
        $alumnos = Student::all();
        Info($alumnos);
        return view('crearClase',compact('alumnos'));
    }
    
}
