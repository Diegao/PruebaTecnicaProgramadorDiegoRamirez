<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ViewUserController extends Controller
{
    
    public function index()
    {


     //   dd(Category::all());

        $users = User:: all();

        return view('verUsers', ['users' => $users]);
    }

}
