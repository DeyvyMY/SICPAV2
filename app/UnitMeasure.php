<?php

namespace App;

use App\Utils\BaseModel;
use Illuminate\Database\Eloquent\Model;

class UnitMeasure extends BaseModel
{
    protected $fillable = ['description',"abbreviation"];

    //
    protected $validationRules =[
        "description"=>"required|max:40",
        "abbreviation"=>"max:100"
    ];

    protected $hidden = ['created_at','updated_at'];

}
