<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResenhaController extends Controller
{
    function index(){
        $resenha = DB::table('clubes')
        ->select()
        ->get();

        return view('resenha.index', [
            'resenha' => $resenha
        ]);
    }

    function create(){
        return view('resenha.resenha');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $data["password"] = Hash::make($data["password"]);

        DB::table('usuarios')->insert($data);

        return redirect('/resenha');
    }

    function show($id){
        $resenha = DB::table('resenha')
        ->find($id);

        return view('resenha.show', ['resenha' => $resenha]);
    }
}

