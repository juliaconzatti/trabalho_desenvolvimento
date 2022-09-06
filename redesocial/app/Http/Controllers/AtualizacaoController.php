<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AtualizacaoController extends Controller
{
    function index(){
        $atualizacao = DB::table('clubes')
        ->select()
        ->get();

        return view('atualizacao.index', [
            'atualizacao' => $atualizacao
        ]);
    }

    function create(){
        return view('atualizacao.atualizacao');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $data["password"] = Hash::make($data["password"]);

        DB::table('usuarios')->insert($data);

        return redirect('/atualizacao');
    }

    function show($id){
        $atualizacao = DB::table('atualizacao')
        ->find($id);

        return view('atualizacao.show', ['atualizacao' => $atualizacao]);
    }
}

