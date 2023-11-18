<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo electronico</h1>
    <p>Este es el primer correo que mandare por laravel</p>

    <p><strong>Nombre: {{$contacto['name']}}</strong></p>
    <p><strong>Correo: {{$contacto['correo']}}</strong></p>
    <p><strong>Mensaje: {{$contacto['mensaje']}}</strong></p>


</body>
</html>