<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


// ***** Page d'Accueil
Route::get('/', function () {
    return view('welcome');
});

// ***** Login Identification
Route::get('/testIdentification', function () {
    return view('testIdentification');
});

// ***** Accès au Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// ***** Tentative de connexion
Route::get('/login', [loginController::class, 'login'])