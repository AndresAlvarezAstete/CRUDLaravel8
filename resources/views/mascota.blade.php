<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD - Laravel 8</title>
</head>
<body>

    <a href="{{ url('/')}}">

        <button>Inicio</button>

    </a>

    <h1>Nombre: {{ $mascota->nombre }}</h1>
    <h1>Edad: {{ $mascota->edad }}</h1>

    <h1>Foto: </h1>

    <img src="http://localhost/CRUD-8/public/storage/{{ $mascota->foto }}">
    

</body>
</html>