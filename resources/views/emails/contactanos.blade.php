<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos cliente</title>
</head>
<body>
    <h1 style="text-align: center">MENSAJE RECIBIDO PARA EL EXAMEN</h1>

    <h2>Datos del formulario:</h2>
    <hr>
    <p ><strong>Ruta: </strong> {{$contacto["ruta"]}}</p>
    <p ><strong>Tiempo: </strong> {{$contacto["tiempo"]}}</p>
    <p ><strong>Normas: </strong> {{$contacto["normas"]}}</p>
    <p ><strong>Precio: </strong> {{$contacto["precio"]}}</p>
</body>
</html>