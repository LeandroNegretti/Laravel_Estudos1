<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return "hello World";
// });

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', function () {
    return "Sobre-nós";
});

Route::get('/contato', function () {
    return "Contato";
});
