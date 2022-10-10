<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/monday/ecofy/prizevisibility',
        '/monday/ecofy/createsetup',
        '/monday/ecofy/changesetup',
        '/monday/ecofy/changereward',

    ];

}
