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

    <h1>Editar Mascota</h1>

    <form method="post" action="{{ url('actualizar/'.$mascota->id) }}" enctype="multipart/form-data">

        @csrf
        @method('put')
        
        <h2>Nombre:</h2>
        <input type="text" name="nombre" value="{{ $mascota->nombre }}">

        <h2>Edad:</h2>
        <input type="number" name="edad" value="{{ $mascota->edad }}">

        <h2>Foto:</h2>
        <img src="http://localhost/CRUD-8/public/storage/{{ $mascota->foto }}">

        <h3>Cambiar:</h3>
        <input type="file" name="fotoNueva">

        <br><br>

        <button type="submit">Actualizar</button>

    </form>

</body>
</html>