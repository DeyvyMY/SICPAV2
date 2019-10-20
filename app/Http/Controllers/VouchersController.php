<?php

namespace App\Http\Controllers;

use App\Entidad;
use App\TipoGastos;
use App\Vendors;
use App\Vouchers;
use App\VoucherType;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class VouchersController extends Controller
{

    public function index()
    {
        $vochersBuy = Vouchers::all();
        $vendors    = Vendors::all(["name", "id"]);
        $entidades  = Entidad::all(["ent_id", "ent_rz"]);
        $types      = VoucherType::all(["id", "description"]);
        return view("vouchers.buy", ["vouchers" => $vochersBuy, "vendors" => $vendors, "entities" => $entidades, "types" => $types]);
    }

    public function store(Request $request)
    {

        try {
            $buyVoucher = new Vouchers();
            $buyVoucher->saveBuy($request->all());

        } catch (ValidationException $exception) {

            return response()->json(
                ["errors" => $exception->validator->getMessageBag()],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        } catch (Exception $e) {
            return response()->json(
                ["errors" => $e->getMessage()],
                JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(["BuyVoucher" => $buyVoucher],
            JsonResponse::HTTP_CREATED);

    }
}
