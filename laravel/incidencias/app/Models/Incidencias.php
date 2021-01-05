<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'incidencias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *///user,cod_incidencia,aula,fecha,hora,estado
    protected $fillable = [
        'user',
        'cod_incidencia',
        'aula',
        'fecha',
        'hora',
        'estado',
        'equipo',
    ];

    //Establecemos diferentes relaciones dentro de eloquent
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cod_incidencia(){
        return $this->belongsTo(Cod_incidencias::class);
    }
    public function aula(){
        return $this->belongsTo(Aulas::class);
    }
    public function estado(){
        return $this->belongsTo(Estado_incidencias::class);
    }
}
