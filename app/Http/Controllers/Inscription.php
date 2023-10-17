<php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Inscription;

class Inscription extends Controller
{
    public function create()
    {
        return view('inscription_homme); 
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'age_min' => 'required|integer',
            'age_max' => 'required|integer',
            'wilaya' => 'required|string',
            'travaille' => 'boolean',
            'hijab' => 'boolean',
            'mariage_divorce' => 'boolean',
            'mariage_enfants' => 'boolean',
            'age' => 'required|integer',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hair_color' => 'required|string',
            'eye_color' => 'required|string',
            'marital_status' => 'required|string',
            'children_count' => 'required|integer',
            'fertility' => 'boolean',
            'education_level' => 'required|string',
            'occupation' => 'required|string',
            'employment_type' => 'required|string',
            'monthly_income' => 'required|string',
            'housing' => 'required|string',
            'religious_practices' => 'boolean',
            'chronic_illness' => 'boolean',
            'disability' => 'boolean',
        ]);

        
        $inscription = new Inscription;
        $inscription->user_id = $request->input('user_id');
        $inscription->age_min = $request->input('age_min');
        $inscription->age_max = $request->input('age_max');
        $inscription->wilaya = $request->input('wilaya');
        $inscription->travaille = $request->input('travaille', false);
        $inscription->hijab = $request->input('hijab', false);
        $inscription->mariage_divorce = $request->input('mariage_divorce', false);
        $inscription->mariage_enfants = $request->input('mariage_enfants', false);
        $inscription->age = $request->input('age');
        $inscription->height = $request->input('height');
        $inscription->weight = $request->input('weight');
        $inscription->hair_color = $request->input('hair_color');
        $inscription->eye_color = $request->input('eye_color');
        $inscription->marital_status = $request->input('marital_status');
        $inscription->children_count = $request->input('children_count');
        $inscription->fertility = $request->input('fertility', false);
        $inscription->education_level = $request->input('education_level');
        $inscription->occupation = $request->input('occupation');
        $inscription->employment_type = $request->input('employment_type');
        $inscription->monthly_income = $request->input('monthly_income');
        $inscription->housing = $request->input('housing');
        $inscription->religious_practices = $request->input('religious_practices', false);
        $inscription->chronic_illness = $request->input('chronic_illness', false);
        $inscription->disability = $request->input('disability', false);

        $inscription->save(); // Enregistrez l'inscription dans la base de données

        // Redirigez l'utilisateur vers une page de confirmation ou une autre page appropriée
        return redirect()->route('confirmation'); // Vous devez définir cette route

        // Vous pouvez également ajouter du code pour gérer les erreurs si l'enregistrement échoue.
    }
}
