<?php

namespace App\Http\Controllers\Administrador;
use App\Modelos\Sdositb;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SdositbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('PlataformaPub/sec2/2/create');
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
            'unidad' => 'required|max:50',
            'facultades' => 'required|max:50',
            'fuente_legal' => 'required|max:150',
            'link' => 'required|max:200'

        ]);
        $carpeta= public_path().'/documentos/02/02';
        $Archivo=$request->file('link');

        $Doc = new  Sdositb();
        $Doc->unidad=$request->unidad;
        $Doc->facultades=$request->facultades;
        $Doc->fuente_legal=$request->fuente_legal;
        $Doc->user_id=auth()->user()->id;
        $Doc->seccion_id=3;

        $Doc->nombre_archivo=$Archivo->getClientOriginalName();

        $nombre = \DB::table('Sdositbs')->select('id_archivo')
            ->max('id_archivo');
        $Nombre_archivo=$nombre+1;
        $Doc->link='documentos/02/02/'.$Nombre_archivo.'.'.$Archivo->getClientOriginalExtension();
        $Archivo->move($carpeta,$Nombre_archivo.'.'.$Archivo->getClientOriginalExtension() );

        $Doc->save();

        return redirect()
            ->route('sdositb.index')
            ->with('status_succes','Archivo publicado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sdositb  $sdositb
     * @return \Illuminate\Http\Response
     */
    public function show(Sdositb $sdositb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sdositb  $sdositb
     * @return \Illuminate\Http\Response
     */
    public function edit(Sdositb $sdositb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sdositb  $sdositb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sdositb $sdositb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sdositb  $sdositb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sdositb $sdositb)
    {
        //
    }
}
