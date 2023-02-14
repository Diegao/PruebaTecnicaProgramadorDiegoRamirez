<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asociado;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this-> middleware('auth');

    }

    public function index (){


$empleado = Empleado:: all();

return view('admin.employee.index', ['empleado' => $empleado]);

    }

    public function store (Request $request){

        $newCategory = new  Empleado();
        
        $newCategory-> codigo_Empleado = $request -> codigo_Empleado;;
        $newCategory-> DPI = $request -> DPI;
        $newCategory-> nit = $request -> nit;
        $newCategory-> puesto = $request -> puesto;
        $newCategory-> PrimerNombre = $request -> PrimerNombre;
        $newCategory-> SegundoNombre = $request -> SegundoNombre;
        $newCategory-> PrimerApellido = $request -> PrimerApellido;
        $newCategory-> SegundoApellido = $request -> SegundoApellido;
        $newCategory-> fechaNacimiento = $request -> fechaNacimiento;
        $newCategory-> fechaInicioLabores = $request -> fechaInicioLabores;
        $newCategory-> Profesion = $request -> Profesion;
        $newCategory-> Telefono = $request -> Telefono;
        $newCategory-> estadoCivil = $request -> estadoCivil;
        $newCategory-> Direccion = $request -> Direccion;

    
        $newCategory -> save();
    
        return redirect()->back();
        
        
            }


            public function update (Request $request, $categoryId){


                //    dd($request->all() );

                $category = Empleado::find($categoryId);



                $category-> codigo_Empleado = $request -> codigo_Empleado;;
                $category-> DPI = $request -> DPI;
                $category-> nit = $request -> nit;
                $category-> puesto = $request -> puesto;
                $category-> PrimerNombre = $request -> PrimerNombre;
                $category-> SegundoNombre = $request -> SegundoNombre;
                $category-> PrimerApellido = $request -> PrimerApellido;
                $category-> SegundoApellido = $request -> SegundoApellido;
                $category-> fechaNacimiento = $request -> fechaNacimiento;
                $category-> fechaInicioLabores = $request -> fechaInicioLabores;
                $category-> Profesion = $request -> Profesion;
                $category-> Telefono = $request -> Telefono;
                $category-> estadoCivil = $request -> estadoCivil;
                $category-> Direccion = $request -> Direccion;



                $category -> save();

                return redirect()->back();


        }


        public function delete (Request $request, $categoryId){


            //   dd($categoryId );

            $category = Empleado::find($categoryId);

            $category -> delete();

            return redirect()->back();


    }


}


