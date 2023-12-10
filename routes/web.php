<?php

use D076\PhpFramework\Router\Route;

return [
    Route::get('/', [App\Http\Controllers\Controller::class, 'hello']),
];
