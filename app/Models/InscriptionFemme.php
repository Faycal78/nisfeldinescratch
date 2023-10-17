<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
class InscriptionFemme extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use Notifiable;

    protected $table = 'inscription_femme';

    protected $fillable = [
        'user_id',
        'age_range',
        'province',
        'current_residence',
        'housing_type',
        'marry_stranger',
        'marry_divorced',
        'marry_with_children',
        'country',
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
        'current_residence_after_marriage',
        'work_after_marriage',
        'wearing_hijab_now',
        'will_wear_hijab_future',
        'practicing_religious_rituals',
        'chronic_illness',
        'disability',
        'phone_number',
        'email',
        'password'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
