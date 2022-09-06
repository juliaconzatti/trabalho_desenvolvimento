<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CluberomanceController extends Controller
{
    function index(){
        $cluberomance = DB::table('clubes')
        ->select()
        ->get();
        return view('cluberomance.index', [
            'cluberomance' => $cluberomance
        ]);
    }

    function create(){
        return view('cluberomance.cluberomance');
    }

    // function store(Request $request){
    //     $uid = DB::table('usuarios')->select('id')->where('id', '=', $request->session()->get("usuario"))->first();
    //     DB::statement("insert into usuarios_clubes (id_usuario, id_clube) values ($uid, 1)");

    //     return redirect('/cluberomance');
    // }

    function show($id){
        $cluberomance = DB::table('clubes')
        ->find($id);

        return view('cluberomance.show', ['cluberomance' => $cluberomance]);
    }
}

