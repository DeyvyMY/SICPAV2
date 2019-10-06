<?php

namespace App\Http\Controllers;

use App\Categories;
use const http\Client\Curl\Features\HTTP2;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class CategoriesController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $category = new Categories();
            $category->validateAndFill($request->all());
            $category->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(["Category" => $category],
            JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
        return new \Illuminate\Http\Response("FFFFF");


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        // GET           /users/{user}/edit          edit    users.edit
        //return view("categories.editForm");
        return response()->view("categories.editForm");

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $categories=Categories::find($id);
            $categories->validateAndFill($request->all());
            $categories->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(["Category" => $categories],
        JsonResponse::HTTP_OK);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $categories=Categories::find($id);
            if(!$categories)
                throw new NotFoundResourceException("Unit Measure $id Not Found");
            $categories->delete();
        } catch (\Exception $exception) {

            return response()->json(
                ["errors" => $exception->getMessage()],
                JsonResponse::HTTP_BAD_REQUEST);
        }
        return response()->json(["Category" => null],JsonResponse::HTTP_NO_CONTENT);
    }
}
