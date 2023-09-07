@extends('layouts.app')

@section('titulo', 'Producto ' . $producto->name) {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')
<h1 >Producto: {{$producto->name}}</h1>
<a href="{{route('productos.index')}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-1 text-white rounded-lg">Regresar</a>
<a href="{{route('productos.edit', $producto)}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-1 text-white rounded-lg">Editar</a>
<p ><strong>Nombre: </strong> {{$producto->name}}</p>
<p ><strong>costo: </strong> ${{$producto->costo}}</p>


<form action="{{route('productos.destroy', $producto)}}" method="post">
    @csrf
    @method('delete')

    
    <button type="submit">Eliminar</button>
</form>
@endsection

