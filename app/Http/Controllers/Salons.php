<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Salons extends Model
{
    protected $table = 'salons';
    protected $fillable = ['nombre', 'ubicacion', 'imagenes'];
}
