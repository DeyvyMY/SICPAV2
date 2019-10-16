<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class Vouchers extends Model
{

    protected $fillable = ["number",
        "entity_id",
        "type",
        "date","guide",
        "vendor_id",
        "condition",
        "exchangeRate","paymentDate","bank","numOperation","total"];

    //
    protected $validationRules =[
        "name"=>"required|max:100",
        "number"=>"required|max:100",
        "entity_id"=>"required|max:100",
        "type"=>"required|max:100",
        "date"=>"required|max:100",
        "guide"=>"required|max:100",
        "vendor_id"=>"required|max:100",
        "condition"=>"required|max:100",
        "exchangeRate"=>"required|max:100",
        "paymentDate"=>"required|max:100",
        "bank"=>"required|max:100",
        "numOperation"=>"required|max:100",
        "total"=>"required|max:100",
    ];

    protected $hidden = ["type",'created_at','updated_at'];

    public function saveBuy(array $request){

        try{
            $this->fill($request);
            $this->save();
        }catch (QueryException $queryException){
            throw new Exception("saving error");
        }
    }

}
