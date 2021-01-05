<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cod_incidencias extends Model
{
    use HasFactory;
    protected $primaryKey = 'cod_incidencia';
    protected $table = 'cod_incidencias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_incidencia',
    ];

    public function incidencias(){
        return $this->hasMany(incidencias::class);
    }
}
