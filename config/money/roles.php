<?php

return [
    'roles' => [
        'super admin' => [
            'manage users',
            'manage campaigns',
            'manage groups',
            'manage participants',
            'manage transactions',
            'view reports',
        ],

        'participant' => [
            'view campaigns',
            'view own contributions',
            'manage own profile',
            'view transactions',
        ],

        'treasurer' => [
            'view campaigns',
            'manage groups',
            'view reports',
        ],

        'organising secretary' => [
            'manage participants',
            'view transactions',
        ],

        'member' => [
            'view campaigns',
        ],
    ],
];
