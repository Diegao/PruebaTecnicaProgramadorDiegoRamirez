<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


     //   dd(Category::all());

        $categories = Category:: all();

        return view('tablas', ['categories' => $categories]);
    }

    protected function create(array $data)
    {
        return Category::create([
            'descripcion' => $data['descripcion'],
          //  'email' => $data['email'],
           
        ]);
    }

    protected function store(Request $request)
    {
        /*
       dd($request -> descripcion);
    dd($request -> all());
*/
    $newCategory = new  Category();

    $newCategory-> descripcion = $request -> descripcion;

    $newCategory -> save();

    echo "La categoria  $newCategory->descripcion ha sido guardada con exito";

    }

}
