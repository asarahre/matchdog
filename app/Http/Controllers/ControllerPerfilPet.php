<?php

namespace App\Http\Controllers;

use App\Models\Perfilpet;
use App\Models\Matches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ControllerPerfilPet extends Controller
{


    public function index()
    {
        $userId = Auth::id();

        $perfilpet = Perfilpet::query()
            ->whereNot('user_id', $userId)
            ->orderBy('id')->get();

        return view('perfilpet.index')->with('perfilpet', $perfilpet);
    }

    public function create()
    {
        return view('perfilpet.cadastro');
    }

    public function deleteall()
    {
        Perfilpet::query()->delete();
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

        return redirect('/perfil-pet');
    }


    public function meuspets($parametro)
    {
        $userId = Auth::id();
        $perfilPet = Perfilpet::query()->where('user_id', $userId)->orderBy('id')->get();

        return view('perfilpet.meuspets')->with('perfilpet', $perfilPet)->with('petlike', $parametro);
    }

    public function matchpets($petcurti, $meupet)
    {

        $matchSelect = Matches::query()
            ->where('pet_id_liked', $meupet)
            ->where('pet_id_liked_by', $petcurti)
            ->orderBy('id')->exists();

        $match = new Matches();
        $match->pet_id_liked = $petcurti;
        $match->pet_id_liked_by = $meupet;
        $match->save();

        $perfilPet = PerfilPet::query()
            ->with('user')
            ->find($petcurti);

        if ($matchSelect) {
            return "deu match
            <br> entre em contato " . $perfilPet->user->email;
        }

        return redirect('/perfil-pet');
    }
}
