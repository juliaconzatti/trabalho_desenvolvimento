<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AcessarclubeController extends Controller
{


    function index(){

        $acessarclubes = DB::table("clubes")->leftJoin("usuarios_clubes", function($join){
            $join->on("usuarios_clubes.id_clube", "=", "clubes.id");
        })
        ->select("clubes.id", "clubes.nome")
        ->where('id_usuario', '=', Auth::user()->id)
        ->get();

        // $ebtn = DB::table('usuarios_clubes');
        // //var_dump($login);
        // if ($ebtn->id_clube == 1) {
        //     return view('/cluberomance');
        // } else { 
        //     return view('login');  
        // }  

        return view('acessarclube/acessarclube', [
            'acessarclubes' => $acessarclubes
        ]);
    }

    function store(Request $request, $id){
        $uid = DB::table('usuarios')->select('id')->where('username', '=', $request->session()->get("usuario"))->first();
        $cadastros = DB::table('usuarios_clubes')->select('id_clube')->get(); 
        
        foreach($cadastros as $c){
            if($c->id_clube == $uid->id && $c->id_clube == $id){
                return redirect()->back()->with('erro', 'teste');
                break;
            }
        }
        DB::statement("select id_clube from usuarios_clubes");
        switch($id){
            case 1: return redirect('/cluberomance'); break;

            case 2: return redirect('/clubefantasia'); break;

            case 3: return redirect('/clubechicklit'); break;

            case 4: return redirect('/clubeterror'); break;

            case 5: return redirect('/clubemisterio'); break;

            case 6: return redirect('/clubeficcao'); break;
        }

       
    }

 }