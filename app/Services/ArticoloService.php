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

// AGGIUNGI QUESTO METODO:
    public function getById($id)
    {
        // findOrFail cerca l'ID; se non lo trova, mostra una pagina 404 automaticamente
        return Articolo::findOrFail($id);
    }

    public function update($id, array $data) {
    $articolo = Articolo::findOrFail($id);
    return $articolo->update($data);
}

public function delete($id) {
    $articolo = Articolo::findOrFail($id);
    return $articolo->delete();
}
}