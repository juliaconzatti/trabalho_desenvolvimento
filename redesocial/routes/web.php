<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriarcontaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CadastroclubeController;

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

Route::get('/criarconta', [CriarcontaController::class, 'index'])->name('index');
Route::get('/criarconta/show/{id}', [CriarcontaController::class, 'show'])->where('id', '[0-9]+');
Route::get('/criarconta', [CriarcontaController::class, 'create'])->name("create");
Route::post('/criarconta/store', [CriarcontaController::class, 'store']);


Route::get('/cadastroclube/index', [CadastroclubeController::class, 'index']);
Route::get('/cadastroclube/show/{id}', [CadastroclubeController::class, 'show'])->where('id', '[0-9]+');
Route::get('/cadastroclube', [CadastroclubeController::class, 'create'])->name("create");
Route::post('/cadastroclube', [CadastroclubeController::class, 'store'])->name("store");
Route::get('/cadastroclube', function () {
})->middleware('auth');
