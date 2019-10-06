<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table      = 'entidad';
    protected $primaryKey = "ent_id";
    protected $fillable   = ['ent_ruc', 'ent_rz', 'ent_dir', 'ent_ciu', 'ent_prov', 'ent_tel', 'ent_cont', 'ent_ctel', 'ent_dpto', 'ent_correo', 'tent_id'];

    public function tipoentidad()
    {
        return $this->belongsTo('App\TipoEntidad', 'tent_id');
    }
}
