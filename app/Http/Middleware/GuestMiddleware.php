<?php

namespace App\Http\Middleware;

use D076\PhpFramework\Http\Middleware\AbstractMiddleware;

class GuestMiddleware extends AbstractMiddleware
{
    public function handle(): void
    {
        if (app()->auth->check()) {
            back();
        }
    }
}
