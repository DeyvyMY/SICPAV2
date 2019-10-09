<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use App\UnitMeasure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class ProductsController extends Controller
{


    public function index()
    {
        $products = Products::all();
        $categories = Categories::all(["name","id"]);
        $unitMeasures = UnitMeasure::all(["abbreviation","id"]);
        return view("product.product",
            ["products" => $products,
                "categories" => $categories,
                "unitMeasures" => $unitMeasures]);
    }


    public function store(Request $request)
    {

        try {
            $data=[
                'description'=>"dqwdescre",
                "code"=>"r34534534",
                "observation"=>"wewww",
                "hasIgv"=>"false",
                "category_id"=>"2",
                "unitMeasure_id"=>"2"
            ];
            $product = new Products();
            $product->validateAndFill($request->all());
            $product->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json(["Product" => $product],
            JsonResponse::HTTP_CREATED);


    }


    public function update(Request $request, $id)
    {
        try {
            $productSaved = Products::find($id);
            if (!$productSaved)
                throw new NotFoundResourceException("Product $id Not Found");
            $productSaved->validateAndFill($request->all());
            $productSaved->save();
        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        } catch (NotFoundResourceException $notFoundE) {

            return response()->json(
                ["errors" => $notFoundE->getMessage()],
                JsonResponse::HTTP_NOT_FOUND);
        }
        return response()->json(["Product" => $productSaved],
            JsonResponse::HTTP_OK);

    }


    public function destroy($id)
    {
        //
        try {
            $productSaved = Products::find($id);
            if (!$productSaved)
                throw new NotFoundResourceException("product $id Not Found");
            $productSaved->delete();
        } catch (Exception $exception) {

            return response()->json(
                ["errors" => $exception->getMessage()],
                JsonResponse::HTTP_BAD_REQUEST);
        }
        return response()->json(["Product" => "Destroy"],
            JsonResponse::HTTP_NO_CONTENT);
    }
}
