<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriarcontaController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [UsuariosController::class, 'login'])->name("login");
Route::post('/login', [UsuariosController::class, 'login'])->name("login");
Route::get('/getlogin/', function(){
    $login = Usuario::all();
    echo json_encode($login);
});

Route::get('/criarconta', [CriarcontaController::class, 'index']);
Route::get('/criarconta/show/{id}', [CriarcontaController::class, 'show'])->where('id', '[0-9]+');
Route::get('/criarconta/create', [CriarcontaController::class, 'create']);
Route::post('/criarconta/store', [CriarcontaController::class, 'store']);
Route::get('/getCriarconta/', function(){
    $login = Usuario::all();
    echo json_encode($login);
});


