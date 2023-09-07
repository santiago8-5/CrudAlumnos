

@extends('layouts.app')

@section('titulo', 'Cursos create') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')
<h1 class="font-bold text-4xl text-blue-600 mb-8 text-center">En esta pagina podras modificar un alumno</h1>

<div class="md:flex md:justify-center md:gap-10 md:items-center">

    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/edit.jpg')}}" alt="Imagen registro de usuarios">
    </div>


    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <form action="{{route('alumnos.update', $alumno)}}" method="post">
            @csrf
            @method('put')

            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                    <br>
            
                    <input type="text" name="name" value="{{old('name', $alumno->name)}}" class="border p-3 w-full rounded-lg
                    @error('name')
                        border-red-500
                    @enderror">
            
                </label>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>

            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">Edad
            
        
                    <input type="number" name="edad" value="{{old('edad', $alumno->edad)}}" class="border p-3 w-full rounded-lg
                    @error('edad')
                        border-red-500
                    @enderror">
                    
            
                </label>
                    @error('edad')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>


            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">
                    Materia:
                    <br>
            
                    <input type="text" name="materia" value="{{old('materia', $alumno->materia)}}" class="border p-3 w-full rounded-lg
                    @error('materia')
                        border-red-500
                    @enderror">
            
                </label>
                    @error('materia')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>


            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">
                    Promedio:
                    <br>
            
                    <input type="number" name="promedio" value="{{old('promedio', $alumno->promedio)}}" class="border p-3 w-full rounded-lg
                    @error('promedio')
                        border-red-500
                    @enderror">
            
                </label>
                    @error('promedio')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>


            <div class="mb-2">
                <div class="md:flex md:justify-between">
                    <input type="submit" value="Modificar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
        
            
                <a href="{{route('alumnos.show', $alumno->id)}}" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">Regresar</a>
                </div>
            </div>
        
            
            

        
        </form>

        


    </div>

</div>



@endsection

