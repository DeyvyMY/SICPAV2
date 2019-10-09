<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Utils\BaseController;
use const http\Client\Curl\Features\HTTP2;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class CategoriesController extends BaseController
{
    /**
     *
     * Verb          Path                        Action  Route Name
     * GET           /users                      index   users.index
     * GET           /users/create               create  users.create
     * POST          /users                      store   users.store
     * GET           /users/{user}               show    users.show
     * GET           /users/{user}/edit          edit    users.edit
     * PUT|PATCH     /users/{user}               update  users.update
     * DELETE        /users/{user}               destroy users.destroy
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view("categories.index", compact("categories"));
    }

    public function __construct()
    {
        parent::__construct(Categories::class);
    }


}
