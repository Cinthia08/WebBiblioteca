<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;


class ApiUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Administrador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encargado = new Administrador;
        $encargado->id_encargado=$request->get('id_encargado');
        $encargado->nombre=$request->get('nombre');
        $encargado->apellido=$request->get('apellido');
        $encargado->password=$request->get('password');
        $encargado->id_rol=$request->get('id_rol');
        $encargado->active=$request->get('active');
        $encargado->celular=$request->get('celular');
        // capturamos el archivo enviaado
        $foto=$request->file('foto');

        $nombre_foto=$request->get('id_encargado');

        if ($foto!=null) {
            $foto->move(public_path().'/img/usuario/',$nombre_foto.'.jpg');
            $encargado->foto=$nombre_foto.'.jpg';
        }

        $encargado->save();
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
