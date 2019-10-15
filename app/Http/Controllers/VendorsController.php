<?php

namespace App\Http\Controllers;

use App\Utils\BaseController;
use App\Vendors;
use Illuminate\Http\Request;

class VendorsController extends BaseController

{
    public function __construct()
    {
        parent::__construct(Vendors::class);
    }
    public function index()
    {
        $vendors = Vendors::all();
        return view("Entidades.vendedor.index", compact("vendors"));
    }

}
