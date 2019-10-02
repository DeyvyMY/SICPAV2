<?php

namespace App\Http\Controllers;

use App\Entidad;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidades = Entidad::where('tent_id', '1')->get();

        return view('Entidades.proveedores.mostrar', ['entidades' => $entidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        Entidad::create(
            [
                'ent_ruc'    => strtoupper($request->get('ent_ruc')),
                'ent_rz'     => strtoupper($request->get('ent_rz')),
                'ent_dir'    => strtoupper($request->get('ent_dir')),
                'ent_ciu'    => strtoupper($request->get('ent_ciu')),
                'ent_prov'   => "Arequipa",
                'tent_id'    => 1,
                'ent_tel'    => strtoupper($request->get('ent_tel')),
                'ent_cont'   => strtoupper($request->get('ent_cont')),
                'ent_ctel'   => strtoupper($request->get('ent_ctel')),
                'ent_dpto'   => "Arequipa",
                'ent_correo' => $request->get('ent_correo'),
            ]
        );
        return "Proveedor creado";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {

        $ent_id  = $request->get('ent_id');
        $entidad = Entidad::find($ent_id);
        $entidad->delete();

        return "eliminado";
    }
}
