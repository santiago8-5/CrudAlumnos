

@extends('layouts.app')

@section('titulo', 'Cursos create') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')
<h1>Modificar un producto</h1>

<form action="{{route('productos.update', $producto)}}" method="post">
    @csrf
    @method('put')
    <label for="">
        Nombre
        <br>

        <input type="text" name="name" value="{{old('name', $producto->name)}}">

    </label>
        @error('name')
            <p>{{$message}}</p>
        @enderror
    <br>

    <label for="">Costo
    <br>

        <input type="number" name="costo" value="{{old('costo', $producto->costo)}}">
        

    </label>
        @error('costo')
            <p>{{$message}}</p>
        @enderror

    <br>

    <label for="">
        Color:
        <br>

        <select name="color" id="">
            <option value="Amarillo">Amarillo</option>
            <option value="Azul">Azul</option>
            <option value="Rojo">Rojo</option>
        </select>
       

    </label>
        @error('color')
            <p>{{$message}}</p>
        @enderror
    <br>

    <input type="submit" value="Enviar formulario">


</form>

@endsection

