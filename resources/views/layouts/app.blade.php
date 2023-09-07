<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @vite('resources/css/app.css') --}}
    <title>@yield('titulo')</title>
    {{-- @vite('resources/js/app.js') --}}
        <script src="https://cdn.tailwindcss.com"></script> 
      

    

</head>

<body class="bg-gray-100">



    <header class="p-5 border-b bg-white shadow">

        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Universidad
            
            </h1>

            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('alumnos.create')}}"> 
                    Crear alumno
                </a>
            </nav>


        </div>

    </header>




    <div class="container mx-auto mt-10">
        @yield('content')

    </div>




    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
         todos los derechos reservados
        {{now()->year}}
    </footer>


</body>

</html>