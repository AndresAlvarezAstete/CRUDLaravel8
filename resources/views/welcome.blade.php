<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD - Laravel 8</title>
</head>
<body>

    <a href="{{ url('/crear')}}">

        <button>Agregar Mascota</button>

    </a>

    <table border="1">
        
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Foto</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            
            @foreach($mascotas as $mascota)

            <tr>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->edad }}</td>
                <td><img src="Storage/{{ $mascota->foto }}" width="100px"></td>

                <td>

                    <a href="{{ url('mascota/'.$mascota->id) }}">
                        
                        <button>Ver</button>

                    </a>

                    <a href="{{ url('mascota/'.$mascota->id.'/edit') }}">
                        
                        <button>Editar</button>

                    </a>

                    <form method="post" action="{{ url('eliminar/'.$mascota->id) }}">
                        
                        @csrf
                        @method('delete')

                        <button type="submit">Borrar</button>

                    </form>

                </td>

            </tr>

            @endforeach  

        </tbody>

    </table>

</body>
</html>