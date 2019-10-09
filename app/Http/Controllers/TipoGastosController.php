<?php

namespace App\Http\Controllers;

use App\TipoGastos;
use App\UnitMeasure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class TipoGastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoGastos = TipoGastos::all();
        return view("gastos.tipoGastos", compact("tipoGastos"));
    }



    public function store(Request $request)
    {

        try {
            $tipoGasto = new TipoGastos();
            $tipoGasto->validateAndFill($request->all());
            $tipoGasto->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(["TipoGasto" => $tipoGasto],
            JsonResponse::HTTP_CREATED);


    }


    public function update(Request $request, $id)
    {
        try {
            $tipoGastoSaved=TipoGastos::find($id);
            if(!$tipoGastoSaved)
                throw new NotFoundResourceException("Tipo de Gasto $id Not existe");
            $tipoGastoSaved->validateAndFill($request->all());
            $tipoGastoSaved->save();
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
        return response()->json(["TipoGasto" => $tipoGastoSaved],
            JsonResponse::HTTP_OK);

    }



    public function destroy($id)
    {
        //
        try {
            $tipoGasto=TipoGastos::find($id);
            if(!$tipoGasto)
                throw new NotFoundResourceException("Tipo de Gatos $id no encontrado");
            $tipoGasto->delete();
        } catch (Exception $exception) {

            return response()->json(
                ["errors" => $exception->getMessage()],
                JsonResponse::HTTP_BAD_REQUEST);
        }
        return response()->json(["TipoGatos" => "Destroy"],
            JsonResponse::HTTP_NO_CONTENT);
    }
}
