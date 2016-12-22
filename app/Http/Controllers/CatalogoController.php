<?php

namespace Catalogo\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables as Datatables;
use DB;
use Catalogo\Entities\Ejecutivos  AS Ejecutivos;
use Catalogo\Entities\Clientes  AS Clientes;
use Catalogo\Entities\Estados  AS Estados;
use Catalogo\Entities\Pais  AS Pais;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clientes = Clientes::take(10)->get();
        
        return view('lista', ['clientes' => $Clientes]);
    
    }

    public function api()
    {
        $model= DB::table('clientes')
            ->join('estados', 'clientes.Estado', '=', 'estados.ID')
            ->join('pais', 'clientes.Pais', '=', 'pais.ID')
            ->join('ejecutivo_ventas', 'clientes.EjecutivoAtiende', '=', 'ejecutivo_ventas.ID')
            ->select('clientes.ID',
                    'clientes.Rfc',
                    'clientes.RazonSocial',
                    'clientes.Status',
                    'clientes.Contribuyente',
                    'estados.Nombre AS Estado',
                    'Pais.Nombre AS Pais',
                    'ejecutivo_ventas.Nombre AS Ejecutivo')
                    ->offset(10)
                    ->limit(5)->orderBy('clientes.ID', 'ASC');  

        return app('datatables')->queryBuilder($model)->make(true); 

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
    public function destroy($id)
    {
        //
    }
}
