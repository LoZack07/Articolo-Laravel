<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ArticoloService;
// AGGIUNGI QUESTE LINEE:
use Illuminate\Support\Facades\Log; 
use App\Models\Articolo; 

class ArticoloServiceProvider extends ServiceProvider
{
    /**
     * Registra i servizi nel container.
     */
    public function register()
{
    // Devi istanziare ArticoloService, non ArticoloServiceProvider
    $this->app->bind(ArticoloService::class, function ($app) {
        return new ArticoloService(); 
    });
}
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Articolo::creating(function ($articolo) {
            Log::info("Creazione articolo: " . $articolo->titolo);
        });

        Articolo::created(function ($articolo) {
            Log::info("Articolo creato con ID: " . $articolo->id);
        });

        Articolo::deleted(function ($articolo) {
            Log::warning("Articolo eliminato con ID: " . $articolo->id);
        });
    }
}