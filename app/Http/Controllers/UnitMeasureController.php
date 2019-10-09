<?php

namespace App\Http\Controllers;


use App\UnitMeasure;
use App\Utils\BaseController;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class UnitMeasureController extends BaseController
{

    public function __construct()
    {
        parent::__construct(UnitMeasure::class);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unitMeasure = UnitMeasure::all();
        return view("product.indexUnitMeasure", compact("unitMeasure"));
    }

}
