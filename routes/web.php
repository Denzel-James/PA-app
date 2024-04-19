<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProfileController;
use App\Models\Pessoa;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('index');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// PESSOAS
Route::resource('/pessoas', PessoaController::class)
    ->middleware(['auth','verified'])->names(['pessoas.index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//
Route::get('/achados',function (){
    return inertia::render('Achados');
})->name('achados');
Route::get('/perdidos',function (){
   return inertia::render('Perdidos');
})->name('perdidos');
Route::get('/sobre',function (){
    return inertia::render('Sobre');
})->name('sobre');


require __DIR__.'/auth.php';
