<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Log;
use Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
        return view('home');
    }

    public function getEmailsAndPasswords()
    {
        $femmeData = DB::table('inscription_femme')->select('email', 'password')->get();
        $inscriptionData = DB::table('inscriptions')->select('email', 'password')->get();

        $allData = $femmeData->concat($inscriptionData);
        return response()->json($allData);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        Log::info('Credentials received: ', ['email' => $credentials['email']]);

        $femmeData = DB::table('inscription_femme')->select('email', 'password')->where('email', $credentials['email'])->first();
        $inscriptionData = DB::table('inscriptions')->select('email', 'password')->where('email', $credentials['email'])->first();

        Log::info('FemmeData found: ', [$femmeData]);
        Log::info('InscriptionData found: ', [$inscriptionData]);

        if($femmeData && Hash::check($credentials['password'], $femmeData->password)) {
            Log::info('User authenticated with femmeData');
            Session::put('user', $femmeData); // Stockez l'utilisateur authentifié en session
            return redirect()->intended('dashboard');
        } elseif ($inscriptionData && Hash::check($credentials['password'], $inscriptionData->password)) {
            Log::info('User authenticated with inscriptionData');
            Session::put('user', $inscriptionData); // Stockez l'utilisateur authentifié en session
            return redirect()->intended('dashboard');
        }

        Log::warning('Authentication failed for email: ' . $credentials['email']);
        return back()->with('error', 'Les identifiants ne correspondent pas à nos enregistrements.');
    }

    public function logout()
    {
        Session::forget('user'); // Supprimez l'utilisateur de la session lors de la déconnexion
        dd(Auth::logout());
        return redirect('/login');
    }

    public function getCurrentUser()
    {
        $user = Session::get('user');
        return $user;
    }
}
