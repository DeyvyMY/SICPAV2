<?php


namespace App\Utils;


use App\Http\Controllers\Controller;
use App\UnitMeasure;
use App\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class BaseController extends Controller
{
    protected  $modelName;


    /**
     * BaseController constructor.
     */
    public function __construct(String $className)
    {
        $this->modelName=$className;
    }


    public function store(Request $request)
    {

        try {

            $model = new $this->modelName();
            $model->validateAndFill($request->all());
            $model->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(["$this->modelName" => $model],
            JsonResponse::HTTP_CREATED);
    }


    public function update(Request $request, $id)
    {
        try {

            $model=$this->modelName::find($id);
            if(!$model)
                throw new NotFoundResourceException("$this->modelName $id Not Found");
            $model->validateAndFill($request->all());
            $model->save();
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
        return response()->json(["$this->modelName" => $model],
            JsonResponse::HTTP_OK);

    }




    public function destroy($id)
    {
        //
        try {
            $model=$this->modelName::find($id);
            if(!$model)
                throw new NotFoundResourceException("$this->modelName $id Not Found");
            $model->delete();
        } catch (Exception $exception) {

            return response()->json(
                ["errors" => $exception->getMessage()],
                JsonResponse::HTTP_BAD_REQUEST);
        }
        return response()->json(["$this->modelName" => "destroy"],
        JsonResponse::HTTP_ACCEPTED);
        //HTTP NO CONTENT
    }
}