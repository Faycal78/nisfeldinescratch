<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    // ... other methods and attributes ...

    public function inscription()
    {
        return $this->hasOne(Inscription::class);
    }

    public function inscriptionFemme()
    {
        return $this->hasOne(InscriptionFemme::class);
    }
}
