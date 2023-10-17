<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
class Inscription extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use Notifiable;

    protected $fillable = [
        'user_id',
        'age_min',
        'age_max',
        'wilaya',
        'travaille',
        'hijab',
        'mariage_divorce',
        'mariage_enfants',
        'age',
        'height',
        'weight',
        'hair_color',
        'eye_color',
        'marital_status',
        'children_count',
        'fertility',
        'education_level',
        'occupation',
        'employment_type',
        'monthly_income',
        'housing',
        'religious_practices',
        'chronic_illness',
        'disability',
        'email',
        'password'
    ];


    // Hacher automatiquement le mot de passe lors de la définition
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
