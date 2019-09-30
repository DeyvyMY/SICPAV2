<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    //
    protected $rules=[
      "name"=>"required|max:30",
        "description"=>"max:100"
    ];

    public function validate(){


    }

}
