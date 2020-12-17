<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_incidencias extends Model
{
    use HasFactory;
    protected $primaryKey = 'cod_estado';
    protected $table = 'estado_incidencias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    public function incidencias(){
        return $this->hasMany(incidencias::class);
    }
}
