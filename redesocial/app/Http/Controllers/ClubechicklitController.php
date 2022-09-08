<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClubechicklitController extends Controller
{
    function index(){
        $clubechicklit = DB::table('clubes')
        ->select()
        ->get();
        return view('clubechicklit.index', [
            'clubechicklit' => $clubechicklit
        ]);
    }

    function create(){
        return view('clubechicklit.clubechicklit');
    }

    function show($id){
        $clubechicklit = DB::table('clubes')
        ->find($id);

        return view('clubechicklit.show', ['clubechicklit' => $clubechicklit]);
    }

    function destroy($id){
        DB::table('usuarios_clubes')
        ->where('id', $id)
        ->delete();

        return redirect('/acessarclube');
    }
}

