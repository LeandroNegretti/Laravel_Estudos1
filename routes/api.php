<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Exemplo de rota para API
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});