<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumno;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    

    
    public function index(){

        $alumnos = Alumno::orderBy('id', 'desc')->paginate(5);
        return view('alumnos.index', compact('alumnos'));
    }

    
    public function indexdos(){

        $alumnos = Alumno::orderBy('id', 'desc')->paginate(5);
        return view('alumnos.index2', compact('alumnos'));
    }
    



    public function create(){
        return view('alumnos.create');
    }


    public function store(StoreAlumno $request){

        $alumno = new Alumno();

        $alumno->name = $request->name;
        $alumno->edad = $request->edad;
        $alumno->materia = $request->materia;
        $alumno->promedio = $request->promedio;
        $alumno->save();

        return redirect()->route('alumnos.show', $alumno->id);
    }



    public function show($id){

        $alumno = Alumno::find($id);

        return view('alumnos.show', compact('alumno'));
    }


    public function edit(Alumno $alumno){

     return view('alumnos.edit', compact('alumno'));

    }


    public function update(Request $request, Alumno $alumno){

        $request->validate([

            'name'=> 'required',
            'edad' => [
                'required',
                'integer',
                 function ($attribute, $value, $fail) {
                     if ($value < 18) {
                        $fail('La edad debe ser mayor a 18');
                     }
                 }
            ],
            'materia'=> 'required',
            'promedio' => [
                'required',
                'integer',
                function ($attribute, $value, $fail) {
                    if ($value < 70 || $value > 100) {
                        $fail('El promedio debe de estar en un rango de 70-100');
                   }
                }
            ]
        ]);

        $alumno->update($request->all());
        return redirect()->route('alumnos.show', $alumno->id);


    }


    public function destroy(Alumno $alumno){


       $alumno->delete();

        return redirect()->route('alumnos.index');


    }



}
