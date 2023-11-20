<?php

namespace App\Http\Middleware;

use D076\PhpFramework\Http\Middleware\AbstractMiddleware;

class AuthMiddleware extends AbstractMiddleware
{
    public function handle(): void
    {
        if (!app()->auth->check()) {
            back();
        }
    }
}
