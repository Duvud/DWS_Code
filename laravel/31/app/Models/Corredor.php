<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corredor extends Model
{
    protected $table = 'corredor';
    protected $primaryKey = 'numero-dorsal';
    protected $fillable = ['numero-dorsal','nombre','apellidos','procedencia','tiempoS'];
    use HasFactory;
}
