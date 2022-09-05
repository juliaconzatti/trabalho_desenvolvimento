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

        return view('cadastroclube.index', [
            'cadastroclube' => $cadastroclube
        ]);
    }

    function create(){
        return view('cadastroclube.create');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $data["password"] = Hash::make($data["password"]);

        DB::table('usuarios')->insert($data);

        return redirect('/cadastroclube');
    }

    function show($id){
        $cadastroclube = DB::table('clubes')
        ->find($id);

        return view('cadastroclube.show', ['cadastroclube' => $cadastroclube]);
    }
}

