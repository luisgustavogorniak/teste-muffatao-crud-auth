<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Cria o token de autenticação
        $token = base64_encode(Auth::user()->email . '|' . time() . '|' . config('app.key'));

        // Passa o token para a view
        return view('dashboard', ['auth_token' => $token]);
    })->name('dashboard');

    Route::get('/sair', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    })->name('sair');
});

require __DIR__ . '/auth.php';
