<?php

namespace App\Http\Controllers\Administrador;

use App\Modelos\Sunoita;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SunoitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('PlataformaPub/1/create');
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
            'fecha_mod' => 'required|max:10',
            'link' => 'required|max:200'

        ]);
        $carpeta= public_path().'/documentos/01/01';
        $Archivo=$request->file('link');

        $Doc = new  Sunoita();
        $Doc->tipo_norma=$request->tipo_norma;
        $Doc->numero=$request->numero;
        $Doc->denominacion=$request->denominacion;
        $Doc->fecha_pub=$request->fecha_pub;
        $Doc->fecha_mod=$request->fecha_mod;
        $Doc->user_id=auth()->user()->id;
        $Doc->seccion_id=1;

        $Doc->nombre_archivo=$Archivo->getClientOriginalName();

        $nombre = \DB::table('Sunoitas')->select('id_archivo')
            ->max('id_archivo');
        $Nombre_archivo=$nombre+1;
        $Doc->link='documentos/01/01/'.$Nombre_archivo.'.'.$Archivo->getClientOriginalExtension();
        $Archivo->move($carpeta,$Nombre_archivo.'.'.$Archivo->getClientOriginalExtension() );

        $Doc->save();

        return redirect()
            ->route('sunoita.index')
            ->with('status_succes','Archivo publicado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sunoita  $sunoita
     * @return \Illuminate\Http\Response
     */
    public function show(Sunoita $sunoita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sunoita  $sunoita
     * @return \Illuminate\Http\Response
     */
    public function edit(Sunoita $sunoita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sunoita  $sunoita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sunoita $sunoita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sunoita  $sunoita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sunoita $sunoita)
    {
        //
    }
}
