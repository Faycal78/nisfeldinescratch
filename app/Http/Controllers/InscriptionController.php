<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash; // Assurez-vous d'avoir cette ligne pour utiliser la fonction de hachage
use Illuminate\Http\Request;
use App\Models\Inscription; // Assurez-vous d'importer le modèle Inscription avec la majuscule appropriée
use Illuminate\Support\Str;

class InscriptionController extends Controller
{
    public function create()
    {
        return view('inscription_homme');
    }

    public function store(Request $request)
    {
        // Validez les données du formulaire ici
        // (Il serait bon d'ajouter la validation des données à ce stade pour vous assurer que les données sont sécurisées et conformes à ce que vous attendez)

        // Générez un matricule aléatoire
        $data = $request->all();
        $matricule = 'M' . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);

        // Ajoutez le matricule aux données
        $data['user_id'] = $matricule;

        // Hash le mot de passe avant de l'enregistrer
        $data['password'] = Hash::make($data['password']);

        // Créez une nouvelle inscription dans la base de données
        \App\Models\Inscription::create($data); 

        // Redirigez l'utilisateur vers une page de succès ou une autre page appropriée
        return redirect()->route('inscription-femme.store')->with('success', 'Inscription enregistrée avec succès');
    }
}
