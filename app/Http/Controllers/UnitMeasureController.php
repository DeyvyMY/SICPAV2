<?php

namespace App\Http\Controllers;


use App\UnitMeasure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UnitMeasureController extends Controller
{
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


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $unitMeasure = new UnitMeasure();
            $unitMeasure->validateAndFill($request->all());
            $unitMeasure->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(["UnitMeasure" => $unitMeasure]);


    }


    public function update(Request $request, UnitMeasure $unitMeasure)
    {
        try {
            $unitMeasure->validateAndFill($request->all());
            $unitMeasure->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(["UnitMeasure" => $unitMeasure]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitMeasure $unitMeasure)
    {
        //
        try {
            $unitMeasure->delete();
        } catch (\Exception $exception) {

            return response()->json(
                ["errors" => $exception->getMessage()],
                JsonResponse::HTTP_BAD_REQUEST);
        }
        return response()->json(["UnitMeasure" => null]);
    }
}
