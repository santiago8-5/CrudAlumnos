@extends('layouts.app')

@section('titulo', 'Contactanos')


@section('content')

  <div class="md:flex md:justify-center md:gap-10 md:items-center">

    <div class="md:w-8/12 p-5">
        <img src="{{ asset('img/edit.jpg') }}" alt="Imagen registro de usuarios" >
    </div>


    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <form action="{{route('contactanos.store')}}" method="post">
            @csrf

            {{-- CAMPO NOMBRE --}}

            <div class="mb-2">
                <label for="name" class="mb-2 block uppercase text-black-500 font-bold">
                    Nombre
                </label>

                <input type="text" name="name" value="{{ old('name') }}"
                    class="border p-3 w-full text-gray-500 font-bold rounded-lg
                @error('name')
                    border-red-500
                @enderror">


                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            {{-- FIN CAMPO NOMBRE --}}


             {{-- CAMPO CORREO --}}

             <div class="mb-2">
              <label for="correo" class="mb-2 block uppercase text-black-500 font-bold">
                  Correo
              </label>

              <input type="text" name="correo" value="{{ old('correo') }}"
                  class="border p-3 w-full text-gray-500 font-bold rounded-lg
              @error('correo')
                  border-red-500
              @enderror">


              @error('correo')
                  <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
              @enderror
          </div>
          {{-- FIN CAMPO NOMBRE --}}



            {{-- CAMPO MENSAJE --}}
            <div class="mb-2">
                <label for="mensaje" class="mb-2 block uppercase text-black-500 font-bold">Mensaje</label>
                <textarea name="mensaje"
                    class="border-2 rounded-lg p-3 w-full 
                    @error('mensaje')
                    border-red-500
                    @enderror"
                    id=""></textarea>
                @error('mensaje')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

            </div>
            {{-- FIN CAMPO DESCRIPCION --}}


            <div class="mb-2">
                <div class="md:flex md:justify-between">
                    <input type="submit" value="Enviar mensaje"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                </div>
            </div>

        </form>

        @if (session('info'))

          <script>
            alert("{{session('info')}}");
          </script>
          
        @endif



    </div>

</div>

@endsection