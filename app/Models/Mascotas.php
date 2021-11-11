<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;

    protected $table = 'mascotas';

    protected $fillable = [

        'nombre', 'edad', 'foto'

    ];

    public $timestamps = false;
}
