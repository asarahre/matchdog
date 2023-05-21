<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerUser extends Controller
{

    public function index()
    {
        $user = User::query()->orderBy('id')->get();
        $this->middleware('auth');
        return view('user.index')->with('user', $user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function form()
    {
        return view('user.login');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        Auth::login($user);
        return redirect('/perfil-pet');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user =  User::query()->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($user) {
            // Autenticação bem-sucedida, redirecionar para a página inicial do aplicativo
            Auth::login($user);
            return redirect('/perfil-pet');
        } else {
            // Autenticação falhou, redirecionar para a página de login com uma mensagem de erro
            return redirect('/user-erro')->with('error', 'Credenciais inválidas');
        }
    }
}
