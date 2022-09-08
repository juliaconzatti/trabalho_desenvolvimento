<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriarcontaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CadastroclubeController;
use App\Http\Controllers\AcessarclubeController;
use App\Http\Controllers\CluberomanceController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ResenhaController;
use App\Http\Controllers\AtualizacaoController;
use App\Http\Controllers\ClubefantasiaController;
use App\Http\Controllers\ClubechicklitController;

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


Route::get('/cadastroclube/store/{id}', [CadastroclubeController::class, 'store'])->name("store.clube");
Route::get('/cadastroclube/show/{id}', [CadastroclubeController::class, 'show'])->where('id', '[0-9]+');
Route::get('/cadastroclube', [CadastroclubeController::class, 'index'])->name('cadastroclube');
// Route::post('/cadastroclube', [CadastroclubeController::class, 'store'])->name("store");
// Route::get('/cadastroclube', function () {
// })->middleware('auth');

Route::get('/acessarclube/acc/{id}', [AcessarclubeController::class, 'store'])->name("acc.clube");
Route::get('/acessarclube/show/{id}', [AcessarclubeController::class, 'show'])->where('id', '[0-9]+');
Route::get('/acessarclube', [AcessarclubeController::class, 'index'])->name("teste.clube");
Route::get('/acessarclube/destroy/{id}', [AcessarclubeController::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/cluberomance/index', [CluberomanceController::class, 'index']);
Route::get('/cluberomance/show/{id}', [CluberomanceController::class, 'show'])->where('id', '[0-9]+');
Route::get('/cluberomance', [CluberomanceController::class, 'create'])->name("cluberomance");
Route::post('/cluberomance', [CluberomanceController::class, 'store'])->name("store");
Route::get('/cluberomance/destroy/{id}', [ClubeRomanceController::class, 'destroy'])->where('id', '[0-9]+')->name("destroy.cluberomance");

Route::get('/clubefantasia/index', [ClubefantasiaController::class, 'index']);
Route::get('/clubefantasia/show/{id}', [ClubefantasiaController::class, 'show'])->where('id', '[0-9]+');
Route::get('/clubefantasia', [ClubefantasiaController::class, 'create'])->name("clubefantasia");
Route::post('/clubefantasia', [ClubefantasiaController::class, 'store'])->name("store");
Route::get('/clubefantasia/destroy/{id}', [ClubefantasiaController::class, 'destroy'])->where('id', '[0-9]+')->name("destroy.clubefantasia");

Route::get('/clubechicklit/index', [ClubechicklitController::class, 'index']);
Route::get('/clubechicklit/show/{id}', [ClubechicklitController::class, 'show'])->where('id', '[0-9]+');
Route::get('/clubechicklit', [ClubechicklitController::class, 'create'])->name("clubechicklit");
Route::post('/clubechicklit', [ClubechicklitController::class, 'store'])->name("store");
Route::get('/clubechicklit/destroy/{id}', [ClubechicklitController::class, 'destroy'])->where('id', '[0-9]+')->name("destroy.clubefantasia");

Route::get('/forum/index', [ForumController::class, 'index']);
Route::get('/forum/show/{id}', [ForumController::class, 'show'])->where('id', '[0-9]+');
Route::get('/forum', [ForumController::class, 'create'])->name("forum");
Route::post('/forum', [ForumController::class, 'store'])->name("store");

Route::get('/resenha/index', [ResenhaController::class, 'index']);
Route::get('/resenha/show/{id}', [ResenhaController::class, 'show'])->where('id', '[0-9]+');
Route::get('/resenha', [ResenhaController::class, 'create'])->name("resenha");
Route::post('/resenha', [ResenhaController::class, 'store'])->name("store");

Route::get('/atualizacao/index', [AtualizacaoController::class, 'index']);
Route::get('/atualizacao/show/{id}', [AtualizacaoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/atualizacao', [AtualizacaoController::class, 'create'])->name("atualizacao");
Route::post('/atualizacao', [AtualizacaoController::class, 'store'])->name("store");