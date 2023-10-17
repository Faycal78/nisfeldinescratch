<?php namespace App\Http\Controllers;

use App\Models\InscriptionFemme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;

use App\Models\inscription_Femme; // Assurez-vous que ce fichier existe et est correctement nommé
use Illuminate\Support\Str;

class InscriptionFemmeController extends Controller
{
    public function create()
    {
        return view('inscription_femme');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $matricule = 'F' . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        $data['user_id'] = $matricule;

        $data['password'] = Hash::make($data['password']);


        try {
            \App\Models\InscriptionFemme::create($data); // Utilisez ici InscriptionFemme
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('inscription-femme.create')->with('success', 'Inscription enregistrée avec succès');
    }
}
