<?php

namespace App\Http\Controllers\Administrador;

use App\Modelos\Sdositc;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SdositcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('PlataformaPub/sec2/3/create');
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
        $request->validate([
            'tipo_norma' => 'required|max:50',
            'numero' => 'required|max:50',
            'denominacion' => 'required|max:150',
            'fecha_pub' => 'required|max:10',
            'link' => 'required|max:200'

        ]);
        $carpeta= public_path().'/documentos/02/03';
        $Archivo=$request->file('link');

        $Doc = new  Sdositc();
        $Doc->tipo_norma=$request->tipo_norma;
        $Doc->numero=$request->numero;
        $Doc->denominacion=$request->denominacion;
        $Doc->fecha_pub=$request->fecha_pub;
        $Doc->user_id=auth()->user()->id;
        $Doc->seccion_id=4;

        $Doc->nombre_archivo=$Archivo->getClientOriginalName();

        $nombre = \DB::table('Sdositcs')->select('id_archivo')
            ->max('id_archivo');
        $Nombre_archivo=$nombre+1;
        $Doc->link='documentos/02/03/'.$Nombre_archivo.'.'.$Archivo->getClientOriginalExtension();
        $Archivo->move($carpeta,$Nombre_archivo.'.'.$Archivo->getClientOriginalExtension() );

        $Doc->save();

        return redirect()
            ->route('sdositc.index')
            ->with('status_succes','Archivo publicado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sdositc  $sdositc
     * @return \Illuminate\Http\Response
     */
    public function show(Sdositc $sdositc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sdositc  $sdositc
     * @return \Illuminate\Http\Response
     */
    public function edit(Sdositc $sdositc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sdositc  $sdositc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sdositc $sdositc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sdositc  $sdositc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sdositc $sdositc)
    {
        //
    }
}
