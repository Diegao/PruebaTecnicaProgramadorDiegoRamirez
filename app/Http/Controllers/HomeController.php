<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\TipoProductos;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $redirectTo = RouteServiceProvider::POSTS;

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

        $tproductos = Productos::find(1);

       //dd($tproductos->producto);

        return view('home');
    }

    public function tablas()
    {
        return view('tablas');
    }

    public function viewUser()
    {
        return view('verUsers');
    }
}
