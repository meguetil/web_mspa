<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch(auth()->user()->Rol)
        {
            case 'Administrador':
                return redirect()->to('SistTrans/Admin');
                break;

            case 'Publicador':
                return redirect()->to('SistTrans/Pub');
                break;

            default:
                return redirect()->to('/');
                break;
        }
        return view('home');
    }
}
