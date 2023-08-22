<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST')) {
            $busca = $request->busca;

            $ord = $request->ord == 'asc' ? 'asc' : 'desc';

            $user = Usuario::where('name', 'LIKE', "%{$busca}%")
                ->orderBy('name', $ord)
                ->get();
        } else {
            // $prod = Produto::all();
            $user = Usuario::paginate();
        }

        return view('usuarios.index', [
            'users' => $user,
        ]);
    }
    public function add()
    {
        return view('usuarios.add');
    }
    public function addSave(Request $form)
    {
        // dd($form);
        $dados = $form->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'string|required',
        ]);
        $dados['password'] = Hash::make($dados['password']);

        $user = Usuario::create($dados);

        event(new Registered($user));

        return redirect()
            ->route('usuarios')
            ->with('sucesso', 'Usuario criado com sucesso');
    }
    public function view(Usuario $usuario)
    {
        return view('usuarios.view', [
            'users' => $usuario,
        ]);
    }
    public function login(Request $request)
    {
        //Se for POST, tenta logar
        if ($request->isMethod('POST')) {
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            if (Auth::attempt($data)) {
                return redirect()->intended(route('home'));
            } else {
                return redirect()
                    ->route('login')
                    ->with('erro', 'Burro pra caralho 🚬🗿');
            }
        }
        return view('usuarios.login');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
