<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asociado;
use Illuminate\Http\Request;

class AsociadoController extends Controller
{
    public function __construct()
    {
        $this-> middleware('auth');

    }

    public function index (){



$empleado = Asociado:: all();

return view('admin.asociado.index', ['empleado' => $empleado]);


    }

    public function store (Request $request){

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
            
                return redirect()->back();
        
        
            }

        public function update (Request $request, $categoryId){


                //    dd($request->all() );

                $category = Asociado::find($categoryId);



                $category-> codigo_Empleado = $request -> codigo_Empleado;;
                $category-> DPI = $request -> DPI;
                $category-> nit = $request -> nit;
                $category-> pasaporte = $request -> pasaporte;
                $category-> fe_edad = $request -> fe_edad;
                $category-> PrimerNombre = $request -> PrimerNombre;
                $category-> SegundoNombre = $request -> SegundoNombre;
                $category-> PrimerApellido = $request -> PrimerApellido;
                $category-> SegundoApellido = $request -> SegundoApellido;
                $category-> fechaNacimiento = $request -> fechaNacimiento;
                $category-> fechaInicio = $request -> fechaInicio;
                $category-> Profesion = $request -> Profesion;
                $category-> Telefono = $request -> Telefono;
                $category-> estadoCivil = $request -> estadoCivil;
                $category-> referenciaLa1 = $request -> referenciaLa1;
                $category-> telefonoReferencia1 = $request -> telefonoReferencia1;
                $category-> referenciaLa2 = $request -> referenciaLa2;
                $category-> telefonoReferencia2 = $request -> telefonoReferencia2;


                $category -> save();

                return redirect()->back();


        }





        public function delete (Request $request, $categoryId){


                //   dd($categoryId );

                $category = Asociado::find($categoryId);

                $category -> delete();

                return redirect()->back();


        }

        
}
