<?php

namespace App\Http\Controllers;


use App\UnitMeasure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

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
        return response()->json(["UnitMeasure" => $unitMeasure],
            JsonResponse::HTTP_CREATED);


    }


    public function update(Request $request, $id)
    {
        try {
            $unitMeasureSaved=UnitMeasure::find($id);
            if(!$unitMeasureSaved)
                throw new NotFoundResourceException("Unit Measure $id Not Found");
            $unitMeasureSaved->validateAndFill($request->all());
            $unitMeasureSaved->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        catch (NotFoundResourceException $notFoundE) {

            return response()->json(
                ["errors" => $notFoundE->getMessage()],
                JsonResponse::HTTP_NOT_FOUND);
        }
        return response()->json(["UnitMeasure" => $unitMeasureSaved],
            JsonResponse::HTTP_OK);

    }



    public function destroy($id)
    {
        //
        try {
            $unitMeasure=UnitMeasure::find($id);
            if(!$unitMeasure)
                throw new NotFoundResourceException("Unit Measure $id Not Found");
            $unitMeasure->delete();
        } catch (Exception $exception) {

            return response()->json(
                ["errors" => $exception->getMessage()],
                JsonResponse::HTTP_BAD_REQUEST);
        }
        return response()->json(["UnitMeasure" => "Destroy"],
            JsonResponse::HTTP_NO_CONTENT);
    }
}
