<?php

namespace App\Http\Controllers;

use App\Models\Asociado;
use Illuminate\Http\Request;

class AsociadoController extends Controller
{



    public function index()
    {


     //   dd(Category::all());

        $empleado = Asociado:: all();

        return view('asociado', ['empleado' => $empleado]);
        

       // return view('empleado');
    
    }


    protected function CreateAsociado(Request $request)
    {
        /*
       dd($request -> descripcion);
    dd($request -> all());
*/
    $newCategory = new  Asociado();

    $newCategory-> codigo_Empleado = $request -> codigo_Empleado;;
    $newCategory-> DPI = $request -> DPI;
    $newCategory-> nit = $request -> nit;
    $newCategory-> pasaporte = $request -> pasaporte;
    $newCategory-> fe_edad = $request -> fe_edad;
    $newCategory-> PrimerNombre = $request -> PrimerNombre;
    $newCategory-> SegundoNombre = $request -> SegundoNombre;
    $newCategory-> PrimerApellido = $request -> PrimerApellido;
    $newCategory-> SegundoApellido = $request -> SegundoApellido;
    $newCategory-> fechaNacimiento = $request -> fechaNacimiento;
    $newCategory-> fechaInicio = $request -> fechaInicio;
    $newCategory-> Profesion = $request -> Profesion;
    $newCategory-> Telefono = $request -> Telefono;
    $newCategory-> estadoCivil = $request -> estadoCivil;
    $newCategory-> referenciaLa1 = $request -> referenciaLa1;
    $newCategory-> telefonoReferencia1 = $request -> telefonoReferencia1;
    $newCategory-> referenciaLa2 = $request -> referenciaLa2;
    $newCategory-> telefonoReferencia2 = $request -> telefonoReferencia2;


    $newCategory -> save();

    return view('empleado');

    }
}
