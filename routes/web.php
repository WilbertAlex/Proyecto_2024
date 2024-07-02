<?php

use App\Http\Controllers\SearchController;
use App\Livewire\AnilloLivewire;
use App\Livewire\CategoriaLivewire;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

//Route::get('anillo',AnilloLivewire::class)->name('anillo');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
Route::get('/categorias',CategoriaLivewire::class)->name('categorias');
Route::get('/instrumentpdf',[CategoriaLivewire::class,'reportepdf'])->name('instrumentpdf');

});
