<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return view('produtos.index');
    }

    public function add(){
        return view('produtos.add');
    }

    public function addSave(Request $form){
        dd($form);
    }

    public function view(){
        return view('produtos.view');
    }
}
