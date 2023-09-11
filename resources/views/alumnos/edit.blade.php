@extends('layouts.app')

@section('titulo', 'Cursos create') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')
    <h1 class="font-bold text-4xl text-blue-600 mb-8 text-center">Modificar un alumno</h1>

    <div class="md:flex md:justify-center md:gap-10 md:items-center">

        <div class="md:w-8/12 p-5">
            <img src="{{ asset('img/edit.jpg') }}" alt="Imagen registro de usuarios">
        </div>


        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

            <form action="{{ route('alumnos.update', $alumno) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                {{-- CAMPO NOMBRE --}}

                <div class="mb-2">
                    <label for="" class="mb-2 block uppercase text-black-500 font-bold">
                        Nombre

                    </label>

                    <input type="text" name="name" value="{{ old('name', $alumno->name) }}"
                        class="border p-3 w-full text-gray-500 font-bold rounded-lg
                    @error('name')
                        border-red-500
                    @enderror">


                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                {{-- FIN CAMPO NOMBRE --}}



                {{-- CAMPOS EDAD Y FECHANACIMIENTO --}}

                <div class="mb-2 grid grid-cols-2 gap-2">

                    <div>
                        <label for="" class="mb-2 block uppercase text-black-500 font-bold">Edad

                        </label>
                        <input type="number" name="edad" value="{{ old('edad', $alumno->edad) }}"
                            class="border p-3 w-full text-gray-500 font-bold rounded-lg
                        @error('edad')
                            border-red-500
                        @enderror">



                        @error('edad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="" class="mb-2 block uppercase text-black-500 font-bold">
                            Año de nacimiento
                        </label>

                        <input type="text" name="fechaNacimiento"
                            value="{{ old('fechaNacimiento', $alumno->fechaNacimiento) }}" placeholder="dd-mm-yyyy"
                            class="border p-3 w-full text-gray-500 font-bold rounded-lg
                        @error('fechaNacimiento')
                            border-red-500
                        @enderror">

                        @error('fechaNacimiento')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
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

                        <input type="text" name="materia" value="{{ old('materia', $alumno->materia) }}"
                            class="border p-3 w-full text-gray-500 font-bold rounded-lg
                            @error('materia')
                                border-red-500
                            @enderror">


                        @error('materia')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror

                    </div>


                    <div>

                        <label for="" class="mb-2 block uppercase text-black-500 font-bold">
                            Promedio:

                        </label>
                        <input type="number" name="promedio" value="{{ old('promedio', $alumno->promedio) }}"
                            class="border p-3 w-full text-gray-500 font-bold rounded-lg
                            @error('promedio')
                                border-red-500
                            @enderror">


                        @error('promedio')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror


                    </div>



                </div>
                {{-- FIN CAMPOS MATERIAS Y PROMEDIO --}}






                {{-- CAMPOS GENEROS --}}
                <div class="mb-4">
                    <label for="" class="mb-2 block uppercase text-black-500 font-bold">Genero</label>

                    <div class="flex gap-8">

                        <div>
                            <input class="cursor-pointer" type="radio" id="check-masc" name="genero" value="Masculino"
                                checked>
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

                        @foreach (['Javascript', 'Python', 'Java', 'PHP'] as $lenguaje)
                            <div>
                                <label for="{{ strtolower($lenguaje) }}">{{ $lenguaje }}</label>
                                <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500"
                                    name="lenguaje[]" value="{{ $lenguaje }}"
                                    {{ in_array($lenguaje, explode(', ', $alumno->lenguaje)) ? 'checked' : '' }}>
                            </div>
                        @endforeach

                    </div>

                </div>

                {{-- FIN CAMPOS OPCIONES LENGUAJE FAVORITO --}}








                {{-- CAMPOS SELECT ESTADO --}}
                <div class="mb-2">

                    <label for="" class="mb-2 block uppercase text-black-500 font-bold">Estado</label>
                    <select id="estadosSelect" class="border-2 border-sky-500 rounded-lg p-2" name="estado">
                        <option value="" disabled>Seleccione un estado</option>
                        <option value="Guerrero" {{$alumno->estado === "Guerrero" ? "selected": ""}}>Guerrero</option>
                        <option value="Oaxaca" {{$alumno->estado === "Oaxaca" ? "selected": ""}}>Oaxaca</option>
                        <option value="Chiapas" {{$alumno->estado === "Chiapas" ? "selected": ""}}>Chiapas</option>
                        <option value="Michoacán" {{$alumno->estado === "Michoacán" ? "selected": ""}}>Michoacán</option>
                        <option value="Jalisco" {{$alumno->estado === "Jalisco" ? "selected": ""}}>Jalisco</option>
                    </select>
                </div>
                {{-- FIN CAMPOS SELECT ESTADO --}}







                {{-- CAMPO DESCRIPCION --}}
                <div class="mb-2">
                    <label for="" class="mb-2 block uppercase text-black-500 font-bold">Descripcion</label>
                    <textarea name="descripcion"
                        class="border-2 rounded-lg p-3 w-full 
                        @error('descripcion')
                        border-red-500
                        @enderror"
                        id="">{{ $alumno->descripcion }}</textarea>
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>
                {{-- FIN CAMPO DESCRIPCION --}}





                {{-- CAMPO IMAGEN --}}

                <div class="mb-2">
                    <label for="imagen" class="mb-2 uppercase text-black-500 font-bold block">Imagen de Alumno</label>
                    <input type="file" name="imagen" accept=".jpg, .png, .jpeg">
                

                </div>



                {{-- FIN CAMPO IMAGEN --}}





                <div class="mb-2">
                    <div class="md:flex md:justify-between">
                        <input type="submit" value="Modificar"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                        <a href="{{ route('alumnos.show', $alumno) }}"
                            class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
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
