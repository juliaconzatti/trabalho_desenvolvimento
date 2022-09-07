<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AcessarclubeController extends Controller
{
    function index(){
        // $acessarclubes = DB::table('clubes')->select('clubes.id', 'clubes.nome')->leftJoin('usuarios_clubes', 'clubes.id', 'clubes.nome', '=', 'usuarios_clubes.id', '=', 'clubes.id' )->where('id_usuario', '=', Auth::user()->id)
        // ->get();

        $acessarclubes = DB::table("clubes")->leftJoin("usuarios_clubes", function($join){
            $join->on("usuarios_clubes.id_clube", "=", "clubes.id");
        })
        ->select("clubes.id", "clubes.nome")
        ->where('id_usuario', '=', Auth::user()->id)
        ->get();

        // $acessarclubes = DB::table("SELECT clubes.id, clubes.nome FROM clubes LEFT JOIN usuarios_clubes ON usuarios_clubes.id = clubes.id = clubes.id WHERE usuarios_clubes.id_clube IS NULL")
        //-> get();


        return view('acessarclube/acessarclube', [
            'acessarclubes' => $acessarclubes
        ]);
    }


    // function index(Request $request, $id){
    //     $uid = DB::table('usuarios')->select('id')->where('username', '=', $request->session()->get("usuario"))->first();
    //     $acessarclubes = DB::table('usuarios_clubes')->select()->get();
        
    //     foreach($acessarclubes as $c){
    //         if($c->id_usuario == $uid->id && $c->id_clube == $id){
    //             return redirect()->back()->withErrors(['erro' => 'falar q esta cadstsro sla']);
    //             // fazer menagem na viw 
    //             break;
    //         }
    //     }
    //     DB::statement("select * from usuarios_clubes ");

    //     return view('acessarclube/acessarclube', [
    //                 'acessarclubes' => $acessarclubes
    //             ]);
    // }

    // function create(){
    //     return view('acessarclube.index');
    // }

    // function store(Request $request, $id){
    //     $uid = DB::table('usuarios')->select('id')->where('username', '=', $request->session()->get("usuario"))->first();
    //     $cadastros = DB::table('usuarios_clubes')->select()->get();
        
    //     foreach($cadastros as $c){
    //         if($c->id_usuario == $uid->id && $c->id_clube == $id){
    //             return redirect()->back()->withErrors(['erro' => 'falar q esta cadstsro sla']);
    //             // fazer menagem na viw 
    //             break;
    //         }
    //     }
    //     DB::statement("insert into usuarios_clubes (id_usuario, id_clube) values ($uid->id, $id)");
    //     switch($id){
    //         case 1: return redirect('/cluberomance'); break;

    //         case 2: return redirect('/clubefantasia'); break;

    //         case 3: return redirect('/clubechicklit'); break;

    //         case 4: return redirect('/clubeterror'); break;

    //         case 5: return redirect('/clubemisterio'); break;

    //         case 6: return redirect('/clubeficcao'); break;
    //     }

       
    // }

//     function show($id){
//         $acessarclubes = DB::table('usuarios_clubes')
//         ->find($id);

//         return view('acessarclube.show', ['acessarclubes' => $acessarclubes]);
//     }
 }