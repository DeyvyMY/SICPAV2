<?php

namespace App;

use App\Utils\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Products extends BaseModel
{
    protected $fillable = ['description',"code","observation","hasIgv","category_id","unitMeasure_id"];

    //

    protected $validationRules = [
        'description'=>"required|max:100",
        "code"=>"required|max:100",
        "observation"=>"required|max:100",
        "hasIgv"=>"required|boolean",
        "category_id"=>"required|exists:categories,id",
        "unitMeasure_id"=>"required|exists:unit_measures,id"
    ];

    protected $hidden = ['created_at','updated_at',"typeEntity_id"];


    public function validateAndFill($inputArray) {

        // must validate input before injecting into model
        //$this->hasIgv=$inputArray["hasIgv"]=="true";
        $inputArray["hasIgv"]=$inputArray["hasIgv"]=="true";
        $this->validate($inputArray);
        $this->fill($inputArray);
    }

    public function category()
    {
        return $this->hasOne('App\Categories');
    }
    public function unitMeasure()
    {
        return $this->hasOne('App\UnitMeasure');
    }
}

