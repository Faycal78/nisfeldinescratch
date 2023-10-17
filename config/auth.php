<?php

return [
    'defaults' => [
        'guard' => 'web', // Ce sera le guard par défaut pour l'application
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

        'inscription' => [
            'driver' => 'session',
            'provider' => 'inscriptions',
        ],

        'inscriptionfemme' => [
            'driver' => 'session',
            'provider' => 'inscription_femmes',
        ],
    ],

    'providers' => [
        'users' => [ // Si vous avez un modèle User, il devrait être listé ici
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'inscriptions' => [
            'driver' => 'eloquent',
            'model' => App\Models\Inscription::class,
        ],
        'inscription_femmes' => [
            'driver' => 'eloquent',
            'model' => App\Models\InscriptionFemme::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        // Si vous souhaitez ajouter la fonctionnalité de réinitialisation du mot de passe pour Inscription et InscriptionFemme, ajoutez-les ici.
    ],

    'password_timeout' => 10800,
];
