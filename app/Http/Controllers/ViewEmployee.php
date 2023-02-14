<?php

namespace App\Http\Controllers;

use App\Models\Asociado;
use App\Models\User;
use Illuminate\Http\Request;

class ViewEmployee extends Controller
{
    public function index()
    {


     //   dd(Category::all());

        $empleado = Asociado:: all();

        return view('empleado', ['empleado' => $empleado]);
        

       // return view('empleado');
    
    }
}
