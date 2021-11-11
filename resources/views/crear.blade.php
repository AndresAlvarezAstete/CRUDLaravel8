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

    <h1>Agregar Mascota</h1>

    <form method="post" enctype="multipart/form-data">

        @csrf
        
        <h2>Nombre:</h2>
        <input type="text" name="nombre">

        <h2>Edad:</h2>
        <input type="number" name="edad">

        <h2>Foto:</h2>
        <input type="file" name="foto">

        <br><br>

        <button type="submit">Agregar</button>

    </form>

</body>
</html>