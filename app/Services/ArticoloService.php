<?php
namespace App\Services;



use App\Models\Articolo;
class ArticoloService
{
/**
* Seleziona tutti gli articoli.
*/
public function getAll()
{
return Articolo::all();
}
/**
* Crea un nuovo articolo.
*/
public function create(array $data)
{
return Articolo::create($data);
}
}