

@extends('layouts.app')

@section('titulo', 'Cursos create') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')
<h1>En esta pagina podras modificar un alumno</h1>

<div class="md:flex md:justify-center md:gap-10 md:items-center">

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <form action="{{route('alumnos.update', $alumno)}}" method="post">
            @csrf
            @method('put')
            <label for="">
                Nombre
                <br>
        
                <input type="text" name="name" value="{{old('name', $alumno->name)}}" class="border p-3 w-full rounded-lg
                @error('name')
                    border-red-500
                @enderror">
        
            </label>
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            <br>
        
            <label for="">Edad
            <br>
        
                <input type="number" name="edad" value="{{old('edad', $alumno->edad)}}" class="border p-3 w-full rounded-lg
                @error('edad')
                    border-red-500
                @enderror">
                
        
            </label>
                @error('edad')
                    <p>{{$message}}</p>
                @enderror
        
            <br>
        
            <label for="">
                Materia:
                <br>
        
                <input type="text" name="materia" value="{{old('materia', $alumno->materia)}}" class="border p-3 w-full rounded-lg
                @error('materia')
                    border-red-500
                @enderror">
        
            </label>
                @error('materia')
                    <p>{{$message}}</p>
                @enderror
            <br>
        
            <label for="">
                Promedio:
                <br>
        
                <input type="number" name="promedio" value="{{old('promedio', $alumno->promedio)}}" class="border p-3 w-full rounded-lg
                @error('promedio')
                    border-red-500
                @enderror">
        
            </label>
                @error('promedio')
                    <p>{{$message}}</p>
                @enderror
            <br>
        
        
        
        
            <input type="submit" value="Modificar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg mt-4">
        
        
        </form>

        <div class="mt-5">
            <a href="{{route('alumnos.show', $alumno->id)}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">Regresar</a>
        </div>


    </div>

</div>



@endsection

