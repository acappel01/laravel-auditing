<?php

/*
 * This file is part of laravel-auditing.
 *
 * @author Antério Vieira <anteriovieira@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | User Model & Resolver
    |--------------------------------------------------------------------------
    |
    | Define the User model class and how to resolve a logged User ID.
    |
    */

    'user' => [
        'model'    => App\User::class,
        'resolver' => function () {
            return auth()->check() ? auth()->user()->getAuthIdentifier() : null;
        },
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | Here is the the database connection for the auditing log.
    |
    */
    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Table
    |--------------------------------------------------------------------------
    |
    | Here is the the table associated with the auditing model.
    |
    */

    'table' => 'audits',

    /*
    |--------------------------------------------------------------------------
    | Audit console
    |--------------------------------------------------------------------------
    |
    | Whether we should audit queries run through console (eg. php artisan db:seed).
    |
    */

    'audit_console' => false,

    /*
    |--------------------------------------------------------------------------
    | Default Auditors
    |--------------------------------------------------------------------------
    |
    | The default auditors used to keep track of changes.
    |
    */

    'auditors' => [
        'database',
    ],
];
