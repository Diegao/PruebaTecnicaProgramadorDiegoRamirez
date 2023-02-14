<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use App\Models\TipoProductos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this-> middleware('auth');

    }

    public function index (){


$empleado = Productos:: all();
$tproductos = TipoProductos:: all();

//dd($tproductos);

return view('admin.productos.index', [
    'empleado' => $empleado,
    'tproductos' => $tproductos
]);

    }

   


           

        public function delete (Request $request, $categoryId){


            //   dd($categoryId );

            $category = Productos::find($categoryId);

            $category -> delete();

            return redirect()->back();


    }

    public function store (Request $request){

        $newCategory = new  Productos();
        
        $newCategory-> tipo_productos_id = $request -> tipo_productos_id;;
        $newCategory-> Descripcion = $request -> Descripcion;


    
        $newCategory -> save();
    
        return redirect()->back();
        
        
            }

    public function update (Request $request, $categoryId){


        //    dd($request->all() );

        $category = Productos::find($categoryId);



     //   $category-> tipo_productos_id = $request -> tipo_productos_id;;
        $category-> Descripcion = $request -> Descripcion;




        $category -> save();

        return redirect()->back();


}

}
