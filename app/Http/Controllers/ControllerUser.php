<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{

    public function index()
    {
        $user = User::query()->orderBy('id')->get();

        return view('user.index')->with('user', $user);
    }

    public function create()
    {
        return view('user.create');
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

        return redirect('/user');
    }
}
