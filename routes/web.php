<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LicitacionesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/dashboard', function () {
//     return view('users');
// })->middleware(['auth', 'verified'])->name('users');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::get('/', function(){
    return view('index');})->name('index');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('logout',[LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function(){

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/user/create', function(){return view('user.create');})->name('user.viewCreate');
    Route::post('/user/create',[LoginController::class, 'register'])->name('user.create');
    Route::get('/user/edit/view/{id}', [UserController::class, 'editView'])->name('user.editView');
    Route::post('/user/edit/{id}',[UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/delete/{id}',[UserController::class, 'delete'])->name('user.delete');

    Route::get('licitaciones', [LicitacionesController::class, 'index'])->name('licitaciones'); 

    Route::post('/cargar', [LicitacionesController::class,'import'])->name('import'); 
    Route::get('/cargar', function(){
        return view('cargar');

    })->name('importV');

    Route::post('/actualizar/{numeroCotizacion}', [LicitacionesController::class, 'actualizarEstado'])->name('actualizarEstado'); 
    Route::post('/comentario/{numeroCotizacion}', [LicitacionesController::class, 'comentario'])->name('comentario'); 

    Route::get('participando', [LicitacionesController::class, 'participando'])->name('participando');
    Route::get('finalizadas', [LicitacionesController::class, 'finalizadas'])->name('finalizadas');
    Route::get('descartadas', [LicitacionesController::class, 'descartadas'])->name('descartadas');

    Route::post('/buscador', [LicitacionesController::class, 'buscador'])->name('buscador');


}); 




