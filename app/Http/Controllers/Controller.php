<?php

namespace App\Http\Controllers;

use D076\PhpFramework\Controller\Controller as BaseController;

class Controller extends BaseController
{
    public function index(): void
    {
        app()->view->page('index');
    }
}