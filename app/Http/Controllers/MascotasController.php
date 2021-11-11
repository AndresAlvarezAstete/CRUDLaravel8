<?php

namespace App\Http\Controllers;

use App\Models\Mascotas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MascotasController extends Controller
{
    
    public function index()
    {

        $mascotas = DB::table('mascotas')->select()->get();

        return view('welcome')->with('mascotas', $mascotas);
    }

    
    public function create()
    {
        return view('crear');
    }

    
    public function store(Request $request)
    {
        $rutaImg = $request['foto']->store('mascotas', 'public');

        $datos = request();

        DB::table('mascotas')->insert([

            'nombre' => $datos['nombre'],
            'edad' => $datos['edad'],
            'foto' => $rutaImg
        ]);

        return redirect('/');
    }

    
    public function show(Mascotas $mascotas)
    {
        
        $mascota = Mascotas::find($mascotas->id);

        return view('mascota')->with('mascota', $mascota);
    }

    
    public function edit(Mascotas $mascotas)
    {
        $mascota = Mascotas::find($mascotas->id);

        return view('editar')->with('mascota', $mascota);
    }

    
    public function update(Request $request, Mascotas $mascotas)
    {
        $datos = request();

        $mascotas->nombre = $datos["nombre"];
        $mascotas->edad = $datos["edad"];

        if (request('fotoNueva')) 
        {
            Storage::delete('public/'.$mascotas->foto);

            $rutaImg = $request['fotoNueva']->store('mascotas', 'public');

            $mascotas->foto = $rutaImg;
        }

        $mascotas->save();

        return redirect('/');

    }

    
    public function destroy(Mascotas $mascotas)
    {
        $mascota = Mascotas::find($mascotas->id);

        if (Storage::delete('public/'.$mascota->foto)) 
        {
            Mascotas::destroy($mascotas->id);
        }

        return redirect('/');
    }
}
