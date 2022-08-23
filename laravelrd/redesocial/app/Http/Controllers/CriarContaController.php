<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriarcontaController extends Controller
{
    function index(){
        $criarconta = DB::table('clientes')
        ->select()
        ->get();

        return view('criarconta.index', [
            'criarconta' => $criarconta
        ]);
    }

    function create(){
        return view('criarconta.create');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        DB::table('clientes')->insert($data);

        return redirect('/criarconta');
    }

    function show($id){
        $criarconta = DB::table('clientes')
        ->find($id);

        return view('criarconta.show', ['criarconta' => $criarconta]);
    }
}

