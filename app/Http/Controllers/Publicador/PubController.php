<?php

namespace App\Http\Controllers\Publicador;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PubController extends Controller
{
    //
    public function index()
    {
        return view('PlataformaPub/inicio');
    }
}
