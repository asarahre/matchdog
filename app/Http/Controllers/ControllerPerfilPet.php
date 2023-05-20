<?php

namespace App\Http\Controllers;

use App\Models\Perfilpet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $path = Storage::disk('public')->put('', $file, 'public');

            $petProfile->image =  '/storage/' . $path;
        } else {
            dd($request->input('image'));
        }
        $petProfile->user()->associate(auth()->user());
        $petProfile->save();

        return redirect('/user');
    }
}
