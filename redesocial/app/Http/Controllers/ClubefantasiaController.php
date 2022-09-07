<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClubefantasiaController extends Controller
{
    function index(){
        $clubefantasia = DB::table('clubes')
        ->select()
        ->get();
        return view('clubefantasia.index', [
            'clubefantasia' => $clubefantasia
        ]);
    }

    function create(){
        return view('clubefantasia.clubefantasia');
    }

    // function store(Request $request){
    //     $uid = DB::table('usuarios')->select('id')->where('id', '=', $request->session()->get("usuario"))->first();
    //     DB::statement("insert into usuarios_clubes (id_usuario, id_clube) values ($uid, 1)");

    //     return redirect('/clubefantasia');
    // }

    function show($id){
        $clubefantasia = DB::table('clubes')
        ->find($id);

        return view('clubefantasia.show', ['clubefantasia' => $clubefantasia]);
    }
}

