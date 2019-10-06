<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEntidad extends Model
{
    protected $table      = 'tipo_entidad';
    protected $primaryKey = 'tent_id';
    protected $fillable   = ['tent_desc'];

    public function entidades()
    {
        return $this->hasMany('App\Entidad');
    }
}
