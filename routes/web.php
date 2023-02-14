<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rutas de Admin Lte 

Route::get('/home', function () {
    return view('welcome');
})->middleware('auth') ;


Route::get('admin/asociado', [App\Http\Controllers\Admin\AsociadoController::class, 'index'])->name('admin.asociado');


Route::get('admin/employee/store', [App\Http\Controllers\Admin\EmployeeController::class, 'store'])->name('admin.employee.store');

Route::get('admin/asociado/store', [App\Http\Controllers\Admin\AsociadoController::class, 'store'])->name('admin.asociado.store');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post', [App\Http\Controllers\PostsController::class, 'index'])->name('post');

Route::get('/tablas', [App\Http\Controllers\CategoriesController::class, 'index'])->name('tablas');

Route::get('/viewUser', [App\Http\Controllers\ViewUserController::class, 'index'])->name('viewUser');

Route::get('/viewemployee', [App\Http\Controllers\ViewEmployee::class, 'index'])->name('viewEmployee');

Route::get('/viewAsociado', [App\Http\Controllers\AsociadoController::class, 'index'])->name('viewAsociado');


//funciones post 
Route::post('/creado', [App\Http\Controllers\CategoriesController::class, 'create'])->name('createCategorie');

Route::post('/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('store');

Route::post('admin/employee/store', [App\Http\Controllers\Admin\EmployeeController::class, 'store'])->name('CreateAsociado');


//GET DE REGISTRO USUARIOS 
Route::get('admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('admin.register');


//CRUD ASOCIADO
Route::get('admin/asociado', [App\Http\Controllers\Admin\AsociadoController::class, 'index'])->name('admin.asociado');

Route::post('admin/asociado/store', [App\Http\Controllers\Admin\AsociadoController::class, 'store'])->name('CAsociado');

Route::post('admin/asociado/{categoryId}/update', [App\Http\Controllers\Admin\AsociadoController::class, 'update'])->name('admin.asociado.update');

Route::delete('admin/asociado/{categoryId}/delete', [App\Http\Controllers\Admin\AsociadoController::class, 'delete'])->name('admin.asociado.delete');

//CRUD EMPLEADO

Route::get('admin/employee', [App\Http\Controllers\Admin\EmployeeController::class, 'index'])->name('admin.employee');

Route::post('admin/empleado/store', [App\Http\Controllers\Admin\EmployeeController::class, 'store'])->name('admin.employee.store');

Route::post('admin/empleado/{categoryId}/update', [App\Http\Controllers\Admin\EmployeeController::class, 'update'])->name('admin.employee.update');

Route::delete('admin/empleado/{categoryId}/delete', [App\Http\Controllers\Admin\EmployeeController::class, 'delete'])->name('admin.employee.delete');

//CRUD PRODUCTOS

Route::get('admin/productos', [App\Http\Controllers\Admin\ProductosController::class, 'index'])->name('admin.productos');

Route::post('admin/productos/store', [App\Http\Controllers\Admin\ProductosController::class, 'store'])->name('admin.productos.store');

Route::post('admin/productos/{productosId}/update', [App\Http\Controllers\Admin\ProductosController::class, 'update'])->name('admin.productos.update');

Route::delete('admin/productos/{productosId}/delete', [App\Http\Controllers\Admin\ProductosController::class, 'delete'])->name('admin.productos.delete');


