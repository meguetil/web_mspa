<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Item;
use App\Modelos\Seccion;
use App\Modelos\Sunoita;



class VisorController extends Controller
{
    public function index()
    {

        $sunoitas = Sunoita::orderby('fecha_pub','Desc')
            ->where('seccion_id','1')
            ->paginate(10);


        return view('visor.index', \compact('sunoitas'));

    }



    public function tabla()
    {
       // $items = Item::all();
      //  $seccions = Seccion::all();
      //  return view('visor.tabla', compact('items','seccions'));
    }
}
