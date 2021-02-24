<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modelos\Item;
use App\Modelos\Seccion;


class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $items = Item::get();
        $seccions = Seccion::get();
        $sec1 = Seccion::where('item_id','1')->get();
        $sec2 = Seccion::where('item_id','2')->get();
        $sec3 = Seccion::where('item_id','3')->get();
        $sec4 = Seccion::where('item_id','4')->get();
        $sec5 = Seccion::where('item_id','5')->get();
        $sec6 = Seccion::where('item_id','6')->get();
        $sec7 = Seccion::where('item_id','7')->get();
        $sec8 = Seccion::where('item_id','8')->get();
        $sec9 = Seccion::where('item_id','9')->get();
        $sec10 = Seccion::where('item_id','10')->get();
        $sec11 = Seccion::where('item_id','11')->get();
        $sec12 = Seccion::where('item_id','12')->get();
        $sec13 = Seccion::where('item_id','13')->get();
        $sec14 = Seccion::where('item_id','14')->get();
        $sec15 = Seccion::where('item_id','15')->get();
        $sec16 = Seccion::where('item_id','16')->get();
        $sec17 = Seccion::where('item_id','17')->get();
        $sec18 = Seccion::where('item_id','18')->get();
        $sec19 = Seccion::where('item_id','19')->get();
        $sec20 = Seccion::where('item_id','20')->get();
        $sec21 = Seccion::where('item_id','21')->get();

        return view('PlataformaAdmin/pubdoc',compact('items','sec1','sec2',
            'sec3','sec4','sec5','sec6','sec7','sec8','sec9','sec10','sec11'
            ,'sec12','sec13','sec14','sec15','sec16','sec17','sec18','sec19'
            ,'sec20','sec21','seccions'));

        //return view('PlataformaAdmin/pubdoc',compact('items','seccion'));

        //$aitems = \DB::table('items')
        //->select('nombre_item')
        //->get();
        //return view('PlataformaAdmin/pubdoc',compact('aitems'));
    }

    Public function store(Request $request){
        $id = $request->get('seccion');

        $sec = Seccion::findOrFail($id);
        if($id == 1){
            return redirect()->route('sunoita.index');
        }
        if($id == 2){
            return redirect()->route('sdosita.index');
        }
        if($id == 3){
            return redirect()->route('sdositb.index');
        }
        if($id == 4){
            return redirect()->route('sdositc.index');
        }

    }

    public function show(Request $request)
    {

    }

    Public function cargarformulario(Request $request){
        $id = $request->get('seccion');

        $sec = Seccion::findOrFail($id);
        if($id == 1){
            return view('PlataformaPub/'.$id.'/create', compact('sec'));
        }


    }
}
