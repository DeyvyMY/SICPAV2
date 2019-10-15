<?php

namespace App;

use App\Utils\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Vendors extends BaseModel
{
    protected $fillable = ['name',"lastName","dni","phone","city","type","observation"];

    //
    protected $validationRules =[
        "name"=>"required|max:100",
        "lastName"=>"required|max:100",
        "dni"=>"required|max:8",
        "phone"=>"required|max:50",
        "type"=>"max:100",
        "city"=>"required|max:50",
        "observation"=>"max:100"
    ];

    protected $hidden = ["type",'created_at','updated_at'];
}
