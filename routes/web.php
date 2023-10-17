<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\InscriptionFemmeController;

//Route::post('/login', [AuthController::class, 'authenticate']);

//Route::get('/dashboard', [SomeController::class, 'someMethod'])->name('dashboard');
// Assuming you're adding this to routes/web.php

// Route for the dashboard


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', [DashboardController::class, 'fetchData'])->name('dashboard.data');

























Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::post('login', 'AuthController@login');


Route::get('/inscription_homme', [InscriptionController::class, 'create'])->name('inscription.create');
Route::post('/inscription_homme', [InscriptionController::class, 'store'])->name('inscription.store');





Route::get('/inscription_femme', [InscriptionFemmeController::class, 'create'])->name('inscription-femme.create');
Route::post('/inscription_femme', [InscriptionFemmeController::class, 'store'])->name('inscription-femme.store');

Route::get('/', function () {
    return view('welcome');
});
;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Plus de routes...

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'DashboardController@index');
    // Ajoutez d'autres routes nécessitant une authentification ici
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route pour afficher tous les e-mails et mots de passe (à utiliser avec prudence, surtout pas en production !)
Route::get('/login', [AuthController::class, 'getEmailsAndPasswords'])->name('get.emails.passwords');

// Route pour afficher le formulaire de connexion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');

// Route pour gérer la soumission du formulaire de connexion
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route pour gérer la déconnexion
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




// Les autres routes de votre application...




// Vos autres routes...
Route::post('/auth.login', [AuthController::class, 'authenticate']);
Route::get('/auth.login', 'AuthController@showLoginForm')->middleware('auth');




// Route pour afficher le formulaire de connexion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route pour traiter les données du formulaire de connexion
//Route::post('/login', [AuthController::class, 'login'])->name('doLogin');

// Route pour déconnecter l'utilisateur
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



// Notez que j'ai ajouté le middleware 'auth' à la route du tableau de bord. 
// Cela garantit que seuls les utilisateurs authentifiés peuvent accéder à cette route.
