<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('users/hello', function () {
//     return View('Raafi');
// })->name('users.hello');