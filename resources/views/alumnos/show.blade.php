@extends('layouts.app')

@section('titulo', 'Producto ' . $alumno->name) {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')



<div class="md:flex md:justify-center md:gap-10 md:items-center">

    <div class="md:w-6/12 p-5">
       
        <img src="" alt="Imagen DEL ALUMNO">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <div class="mt-4 text-xl">

            <div class="mb-10">
                <a href="{{route('alumnos.index')}}" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">Regresar</a>
                <a href="{{route('alumnos.edit', $alumno)}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-2 text-white rounded-lg">Editar</a>
            </div>

            <div class="mb-10">
                <p class="mb-3"><strong>Nombre: </strong> {{$alumno->name}}</p>
                <p class="mb-3"><strong>Edad: </strong> {{$alumno->edad}}</p>
                <p class="mb-3"><strong>Materia: </strong> {{$alumno->materia}}</p>
                <p class="mb-3"><strong>Promedio: </strong> {{$alumno->promedio}}</p>
            </div>

            
  
            <form action="{{route('alumnos.destroy', $alumno)}}" method="post" class="bg-red-600 hover:bg-red-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg text-center">
                @csrf
                @method('delete')
            
                
                <button type="submit" class=" uppercase">Eliminar</button>
            </form>


            
        </div>
      

    </div>


</div>


@endsection

