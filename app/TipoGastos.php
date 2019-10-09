<?php

namespace App;

use App\Utils\BaseModel;
use Illuminate\Database\Eloquent\Model;

class TipoGastos extends BaseModel
{
    protected $fillable = ['description'];

    //
    protected $validationRules =[
        "description"=>"required|max:100",

    ];

    protected $hidden = ['created_at','updated_at'];

}
