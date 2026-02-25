<?php

// Rotta messaggio di benvenuto

use App\Http\Controllers\ArticoloController;
use Illuminate\Support\Facades\Route;

Route::get('/benvenuto/{id}', function ($id) {
return 'Benvenuto in Laravel '.$id.'!';
});
// definisce una rotta GET per /articoli e collega la richiesta al metodo
// index del controller ArticoloController
// Assegna un nome univoco alla rotta: articoli.index: questo permette di
// riferirsi alla rotta senza scrivere manualmente l'URL
Route::get('/articoli',
[ArticoloController::class, 'index'])->name('articoli.index');
// Rotta per visualizzare un singolo articolo
Route::get('/articolo/{id}',
[ArticoloController::class, 'show'])->name('articolo.show');

// Rotta per mostrare il form di creazione
Route::get('/articoli/create', [ArticoloController::class, 'create'])->name('articoli.create');

// Rotta per salvare i dati inviati dal form (metodo POST)
Route::post('/articoli', [ArticoloController::class, 'store'])->name('articoli.store');

// Modifica
Route::get('/articoli/{id}/edit', [ArticoloController::class, 'edit'])->name('articoli.edit');
Route::put('/articoli/{id}', [ArticoloController::class, 'update'])->name('articoli.update');

// Elimina
Route::delete('/articoli/{id}', [ArticoloController::class, 'destroy'])->name('articoli.destroy');