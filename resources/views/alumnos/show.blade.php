@extends('layouts.app')

@section('titulo', 'Producto ' . $alumno->name) {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')

<a href="{{route('alumnos.index')}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-2 text-white rounded-lg">Regresar</a>
<a href="{{route('alumnos.edit', $alumno)}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-2 text-white rounded-lg">Editar</a>



<div class="mt-4 text-xl">
    <p ><strong>Nombre: </strong> {{$alumno->name}}</p>
    <p ><strong>Edad: </strong> {{$alumno->edad}}</p>
    <p ><strong>Materia: </strong> {{$alumno->materia}}</p>
    <p ><strong>Promedio: </strong> {{$alumno->promedio}}</p>
</div>





<form action="{{route('alumnos.destroy', $alumno)}}" method="post" class="bg-red-600 hover:bg-red-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
    @csrf
    @method('delete')

    
    <button type="submit">Eliminar</button>
</form>


@endsection

