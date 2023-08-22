<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ApiProdutosController extends Controller
{
    public function list()
    {
        $produto = Produto::paginate();
        $dados = [$produto];

        return response()->json($dados, 200);
    }
}
