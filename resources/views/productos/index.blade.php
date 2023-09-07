@extends('layouts.app')

@section('titulo', 'Cursos') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')
<h1 class="font-bold text-blue-600">Bienvenido a la página principal de producto</h1>
<a href="{{route('productos.create')}}">Crear productos</a>

    <ul>

        @foreach ($productos as $producto )

            <li>
                {{-- PASAR UN PARAMETRO UTILIZANDO EL METODO ROUTE --}}
                <a href="{{route('productos.show', $producto->id)}}">{{$producto->name}}</a>
                
            </li>
            
        @endforeach
        
    </ul>


    {{$productos->links()}}


@endsection
