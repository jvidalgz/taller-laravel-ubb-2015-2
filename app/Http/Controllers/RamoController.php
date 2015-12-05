<?php

namespace App\Http\Controllers;

use App\Ramo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RamoController extends Controller
{
    /**
     * Muestra todas las instancias del modelo Ramo
     *
     * @return \App\Ramo
     */
    public function index()
    {
        $ramos = Ramo::paginate(6);

        return view('ramos.index',compact('ramos'));
    }

    /**
     * Muestra formulario para crear un nuevo ramo
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ramos.create');
    }

    /**
     * Almacena un nuevo ramo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Muestra una instancia de Ramo especifica
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ramo = Ramo::find($id);

        return $ramo;
    }

    /**
     * Muestra el formulario para editar un ramo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Actualiza un ramo identificado con '$id'.
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
