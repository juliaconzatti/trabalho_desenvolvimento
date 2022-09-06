<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ForumController extends Controller
{
    function index(){
        $forum = DB::table('clubes')
        ->select()
        ->get();

        return view('forum.index', [
            'forum' => $forum
        ]);
    }

    function create(){
        return view('forum.forum');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $data["password"] = Hash::make($data["password"]);

        DB::table('usuarios')->insert($data);

        return redirect('/forum');
    }

    function show($id){
        $forum = DB::table('forum')
        ->find($id);

        return view('forum.show', ['forum' => $forum]);
    }
}

