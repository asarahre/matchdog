<?php

namespace App\Http\Controllers;

use App\Models\Perfilpet;
use Illuminate\Http\Request;

class ControllerPerfilPet extends Controller
{


    public function index()
    {
        $perfilpet = Perfilpet::query()->orderBy('id')->get();

        return view('perfilpet.index')->with('perfilpet', $perfilpet);
    }

    public function create()
    {
        return view('perfilpet.cadastro');
    }

    public function store(Request $request)
    {
        // dd($request->input('name'));
        $petProfile = new Perfilpet();
        $petProfile->name = $request->input('name');
        $petProfile->breed = $request->input('breed');
        $petProfile->age = $request->input('age');
        $petProfile->gender = $request->input('gender');
        $petProfile->bio = $request->input('bio');
        if ($request->input('image')) {
            $image = $request->file('image');
            $imageBytes = file_get_contents($image->getRealPath());
            $petProfile->image = $imageBytes;
        }
        $petProfile->user()->associate(auth()->user());
        $petProfile->save();

        return redirect('/user');
    }
}
