<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Ensure the user is authenticated before accessing the dashboard.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('dashboard.index');
    }

    public function fetchData()
    {
        // Exemple : Récupérer les détails de l'utilisateur authentifié
        $user = Auth::user();

        if ($user) {
            // L'utilisateur est authentifié, vous pouvez accéder à ses données
            dd($user);
        } else {
            // L'authentification a échoué, l'utilisateur n'est pas connecté
            dd("L'authentification a échoué. L'utilisateur n'est pas connecté.");
        }

        // Vous pouvez récupérer d'autres données liées au tableau de bord ici...

        return response()->json([
            'user' => $user,
            // ... autres données
        ]);
    }
}
