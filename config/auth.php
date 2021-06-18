<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'jwt',
            'provider' => 'admins',
        ],

        'seller' => [
            'driver'   => 'jwt',
            'provider' => 'sellers',
        ],
    ],



    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => User\Database\Models\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => Admin\Database\Models\Admin::class,
        ],

        'sellers' => [
            'driver' => 'eloquent',
            'model' => Seller\Database\Models\Seller::class,
        ],
    ],



    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'sellers' => [
            'provider' => 'sellers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
