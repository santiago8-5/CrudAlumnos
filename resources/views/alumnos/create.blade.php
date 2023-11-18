

@extends('layouts.app')

@section('titulo', 'Alumnos create') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}



@section('content')

<div>
    <style>
        body {
            background: #085078;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #85D8CE, #085078);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #85D8CE, #085078);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</div>


<h1 class="text-4xl font-black mb-8 text-center">Registrar Alumno</h1>


<div class="md:flex md:justify-center md:gap-10 md:items-center">

    <div class="md:w-7/12 p-5">
        <img src="{{asset('img/register.jpg')}}" alt="Imagen registro de usuarios">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <form action="{{route('alumnos.store')}}" method="post">
            @csrf
           

             {{-- CAMPO NOMBRE --}}

             <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-black-500 font-bold">
                    Nombre
                    
                </label>

                    <input type="text" name="name" value="{{old('name')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                    @error('name')
                        border-red-500
                    @enderror">
            
                
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>
            {{-- FIN CAMPO NOMBRE --}}



            {{-- CAMPOS EDAD Y FECHANACIMIENTO --}}

            <div class="mb-2 grid grid-cols-2 gap-2">

                <div>
                    <label for="" class="mb-2 block uppercase text-black-500 font-bold">Edad
            
                    </label>
                        <input type="number" name="edad" value="{{old('edad')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                        @error('edad')
                            border-red-500
                        @enderror">
                        
                
                  
                        @error('edad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                </div>

                <div>
                    <label for="" class="mb-2 block uppercase text-black-500 font-bold">
                        Año de nacimiento
                    </label>
        
                        <input type="text" name="fechaNacimiento" placeholder="dd-mm-yyyy"  class="border p-3 w-full text-gray-500 font-bold rounded-lg
                        @error('fechaNacimiento')
                            border-red-500
                        @enderror">

                        @error('fechaNacimiento')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                          
                </div>
                
            </div>

            {{-- FIN CAMPOS EDAD Y FECHANACIMIENTO --}}






            {{-- CAMPOS MATERIAS Y PROMEDIO --}}
            <div class="mb-2 grid grid-cols-2 gap-2">
                    <div>
                        <label for="" class="mb-2 block uppercase text-black-500 font-bold">
                            Materia:
                        </label>

                            <input type="text" name="materia" value="{{old('materia')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                            @error('materia')
                                border-red-500
                            @enderror">
                    
                        
                            @error('materia')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror

                    </div>
                    

                    <div>

                        <label for="" class="mb-2 block uppercase text-black-500 font-bold">
                            Promedio:
                            
                        </label>
                            <input type="number" name="promedio" value="{{old('promedio')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                            @error('promedio')
                                border-red-500
                            @enderror">
                    
                        
                            @error('promedio')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                   

                    </div>
                        


            </div>
            {{-- FIN CAMPOS MATERIAS Y PROMEDIO --}}






            {{-- CAMPOS GENEROS --}}
            <div class="mb-4">
                <label for="" class="mb-2 block uppercase text-black-500 font-bold">Genero</label>
                
                <div class="flex gap-8">

                    <div>
                        <input class="cursor-pointer" type="radio" id="check-masc" name="genero" value="Masculino" checked>
                        <label for="check-masc">Masculino</label>
                    </div>
    
                    <div>
                        <input class="cursor-pointer" type="radio" id="check-fem" name="genero" value="Femenino">
                        <label for="check-fem">Femenino</label>
                    </div>
    
                    <div>
                        <input class="cursor-pointer" type="radio" id="check-other" name="genero" value="Otro">
                        <label for="check-other">Otro</label>
                    </div>

                </div>
                

            </div>
            {{-- FIN CAMPOS GENEROS --}}






            {{-- CAMPOS OPCIONES LENGUAJE FAVORITO --}}

            <div class="mb-2">

                

                <label for="" class="mb-2 block uppercase text-black-500 font-bold">Lenguaje favorito</label>

                <div class="flex gap-8">

                    <div>
                        <label for="js">Javascript</label>
                        <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="js" value="Javascript" {{-- {{ in_array('Javascript', $alumno->opciones) ? 'checked' : '' }}--}}> 
                    </div>
    
                    
                    <div>
                        <label for="py">Python</label>
                        <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="py" value="Python" {{-- {{ in_array('Python', $alumno->opciones) ? 'checked' : '' }} --}}>
                    </div>
    
                    
                    <div>
                        <label for="jv">Java</label>
                        <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="jv" value="Java" {{-- {{ in_array('Java', $alumno->opciones) ? 'checked' : '' }} --}}>
                    </div>
    
                    
                    <div>
                        <label for="ph">PHP</label>
                        <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="ph" value="PHP" {{-- {{ in_array('PHP', $alumno->opciones) ? 'checked' : '' }} --}}>
                    </div>

                </div>
  
            </div>

            {{-- FIN CAMPOS OPCIONES LENGUAJE FAVORITO --}}








             {{-- CAMPOS SELECT ESTADO --}}
            <div class="mb-2">
                
                <label for="" class="mb-2 block uppercase text-black-500 font-bold">Estado</label>
                <select id="estadosSelect" class="border-2 border-sky-500 rounded-lg p-2" name="estado">
                    <option value="" disabled selected>Seleccione un estado</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Jalisco">Jalisco</option>
                </select>
            </div>
            {{-- FIN CAMPOS SELECT ESTADO --}}



            
            <div class="mb-2">
                <label for="" class="mb-2 block uppercase text-black-500 font-bold">Descripcion</label>
                <textarea name="descripcion" class="border-2 rounded-lg p-3 w-full 
                @error('descripcion')
                border-red-500
                @enderror" id="">
            
                </textarea>

                
                @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

            </div>



           <div class="mb-2">
                 
        
            <div class="md:flex md:justify-between">
                <input type="submit" value="Registrar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
        

                <a href="{{route('alumnos.index')}}" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black-500 inline font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                     </svg>
                    Regresar</a>
            </div>

           </div>
        
        
        
            
        </form>

        
    
    </div>

    

</div>







@endsection


{{-- RADIO, SELECT, CONTROL UN CRUD --}}

