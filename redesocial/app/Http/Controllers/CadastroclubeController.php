<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CadastroclubeController extends Controller
{
    function index(){
        $cadastroclube = DB::table('clubes')
        ->select()
        ->get();

        return view('cadastroClube.cadclube', [
            'cadastroclube' => $cadastroclube
        ]);
    }

    function create(){
        return view('cadastroclube.cadclube');
    }

    function store(Request $request, $id){
        $uid = DB::table('usuarios')->select('id')->where('username', '=', $request->session()->get("usuario"))->first();
        $cadastros = DB::table('usuarios_clubes')->select()->get();
        
        foreach($cadastros as $c){
            if($c->id_usuario == $uid->id && $c->id_clube == $id){
                return redirect()->back()->withErrors(['erro' => 'falar q esta cadstsro sla']);
                // fazer menagem na viw 
                break;
            }
        }
        DB::statement("insert into usuarios_clubes (id_usuario, id_clube) values ($uid->id, $id)");
        switch($id){
            case 1: return redirect('/cluberomance/index'); break;
        }

       
    }

    function show($id){
        $cadastroclube = DB::table('clubes')
        ->find($id);

        return view('cadastroclube.show', ['cadastroclube' => $cadastroclube]);
    }
}

