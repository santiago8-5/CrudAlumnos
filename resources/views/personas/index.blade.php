@extends('layouts.app')

@section('titulo', 'Personas') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')
<h1 class="font-bold text-blue-600">Bienvenido a la página principal del curso</h1>
<a href="{{route('$personas.create')}}">Crear personas</a>

    <ul>

        @foreach ($personas as $persona )

            <li>
                {{-- PASAR UN PARAMETRO UTILIZANDO EL METODO ROUTE --}}
                <a href="{{route('productos.show', $persona->id)}}">{{$persona->name}}</a>
                
            </li>
            
        @endforeach
        
    </ul>


    {{$personas->links()}}


@endsection
