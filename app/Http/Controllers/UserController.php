<?php

namespace App\Http\Controllers;


use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('POST')) {
            $busca = $request->busca;

            $ord = $request->ord == 'asc' ? 'asc' : 'desc';

            $user = Usuario::where('name', 'LIKE', "%{$busca}%")
            ->orderBy('name', $ord)
            ->get();
        }else{
            // $prod = Produto::all();
            $user = Usuario::paginate();
        }

        return view('usuarios.index', [
            'users' => $user,
        ]);
}
public function add(){
    return view('usuarios.add');
}
public function addSave(Request $form){
    // dd($form);
    $dados = $form->validate([
        'name' => 'required|min:3',
        'email' => 'required',
        'password' => 'required',
    ]);
    Usuario::create($dados);
    return redirect()->route('usuarios')->with('sucesso', 'Usuario criado com sucesso');
}
public function view(Usuario $usuario){
    return view('usuarios.view', [
        'users' => $usuario,
    ]);
}
}
