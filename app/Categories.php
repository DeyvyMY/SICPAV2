<?php

namespace App;

use App\Utils\BaseModel;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class Categories extends BaseModel
{
    protected $fillable = ['name',"description","family_id"];

    //
    protected $validationRules =[
      "name"=>"required|max:5",
        "description"=>"max:100"
    ];

    protected $hidden = ['created_at','updated_at'];

}
