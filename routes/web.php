<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MascotasController;

Route::get('/', [MascotasController::class, 'index']);
Route::get('/crear', [MascotasController::class, 'create']);
Route::post('/crear', [MascotasController::class, 'store']);
Route::get('/mascota/{mascotas}', [MascotasController::class, 'show']);
Route::get('/mascota/{mascotas}/edit', [MascotasController::class, 'edit']);
Route::put('actualizar/{mascotas}', [MascotasController::class, 'update']);
Route::delete('eliminar/{mascotas}', [MascotasController::class, 'destroy']);