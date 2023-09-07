

@extends('layouts.app')

@section('titulo', 'Alumnos create') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}



@section('content')


<h1 class="font-bold text-4xl text-blue-600 mb-8 text-center">Registrar Alumno</h1>


<div class="md:flex md:justify-center md:gap-10 md:items-center">

    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/register.jpg')}}" alt="Imagen registro de usuarios">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <form action="{{route('alumnos.store')}}" method="post">
            @csrf
           

            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                    <br>
            
                    <input type="text" name="name" value="{{old('name')}}" class="border p-3 w-full rounded-lg
                    @error('name')
                        border-red-500
                    @enderror">
            
                </label>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                <br>
            </div>
        
           

            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">Edad
                    <br>
                
                        <input type="number" name="edad" value="{{old('edad')}}" class="border p-3 w-full rounded-lg
                        @error('edad')
                            border-red-500
                        @enderror">
                        
                
                    </label>
                        @error('edad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                
                    <br>
            </div>
        
          

            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">
                    Materia:
                    <br>
            
                    <input type="text" name="materia" value="{{old('materia')}}" class="border p-3 w-full rounded-lg
                    @error('materia')
                        border-red-500
                    @enderror">
            
                </label>
                    @error('materia')
                        <p  class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                <br>
            </div>
        
           

            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-gray-500 font-bold">
                    Promedio:
                    <br>
            
                    <input type="number" name="promedio" value="{{old('promedio')}}" class="border p-3 w-full rounded-lg
                    @error('promedio')
                        border-red-500
                    @enderror">
            
                </label>
                    @error('promedio')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                <br>
            </div>



           <div class="mb-2">
                 
        
            <div class="md:flex md:justify-between">
                <input type="submit" value="Registrar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
        
                <a href="{{route('alumnos.index')}}" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">Regresar</a>
            </div>

           </div>
        
        
        
            
        </form>


        

        <div class="mt-5">
            
        </div>
        
    
    </div>

    

</div>







@endsection


{{-- RADIO, SELECT, CONTROL UN CRUD --}}

