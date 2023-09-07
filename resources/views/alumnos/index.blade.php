@extends('layouts.app')

@section('titulo', 'Cursos') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')

<div class="mb-7">
    <h1 class="font-bold text-blue-600 mb-6 text-center uppercase text-3xl ">Listado de alumnos</h1>
</div>




  <div class="container">
    <table class="table-fixed w-full border-spacing-x-0 border-gray-70">
        <thead class="bg-sky-400">
          <tr>
            <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Nombre</th>
            <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Edad</th>
            <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Materia</th>
            <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Promedio</th>
            <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Acciones</th>

          </tr>
        </thead>
        
        <tbody>
 
          @foreach ($alumnos as $alumno )

          <tr class="text-center h-16 hover:bg-slate-300">
            <td>{{$alumno->name}}</td>
            <td>{{$alumno->edad}}</td>
            <td>{{$alumno->materia}}</td>
            <td>{{$alumno->promedio}}</td>
            <td>
                <a href="{{route('alumnos.show', $alumno->id)}}" class="bg-green-600 hover:bg-green-700 p-2 transition-colors cursor-pointer  text-white rounded-lg">Detalles</a>
            </td>
          </tr>
              
          @endforeach


        </tbody>
      </table>
  </div>
    
   

   


    {{$alumnos->links()}}


@endsection





