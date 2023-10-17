<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\InscriptionFemme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function getEmailsAndPasswords()
    {
        $femmeData = InscriptionFemme::select('email', 'password')->get();
        $inscriptionData = Inscription::select('email', 'password')->get();
        $allData = $femmeData->concat($inscriptionData);
         // Affiche les emails et les mots de passe
        return response()->json($allData);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Check in Inscription table
        $userInscription = Inscription::where('email', $email)->first();
        if ($userInscription && Hash::check($password, $userInscription->password)) {
            Auth::login($userInscription);
            return redirect()->intended('');
        }

        // Check in InscriptionFemme table
        $userFemme = InscriptionFemme::where('email', $email)->first();
        if ($userFemme && Hash::check($password, $userFemme->password)) {
            Auth::login($userFemme);
            return redirect()->intended('');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
