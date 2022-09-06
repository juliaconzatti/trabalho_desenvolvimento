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

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $data["password"] = Hash::make($data["password"]);

        DB::table('usuarios')->insert($data);

        return redirect('/cluberomance');
    }

    function show($id){
        $cluberomance = DB::table('clubes')
        ->find($id);

        return view('cluberomance.show', ['cluberomance' => $cluberomance]);
    }
}

