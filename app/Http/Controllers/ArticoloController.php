<?php
namespace App\Http\Controllers;
use App\Models\Articolo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ArticoloController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
// Recupera tutti gli articoli
$articoli = Articolo::all();
// Passa gli articoli alla vista
return view('articoli.index', compact('articoli'));
}
/**
* Display the specified resource.
*/
// Metodo per visualizzare un singolo articolo
public function show($id)
{
// Recupera l'articolo per ID
$articolo = Articolo::findOrFail($id);
// Passa l'articolo alla vista
return view('articoli.show', compact('articolo'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('articoli.create');}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
// Validazione dei dati (opzionale ma consigliata)
    $request->validate([
        'nome' => 'required|max:30',
        'descrizione' => 'nullable|max:100',
    ]);

    // Creazione del record sfruttando il mass assignable del Model [cite: 32]
    Articolo::create($request->all());

    // Ritorna alla lista con un messaggio di successo [cite: 210]
    return redirect()->route('articoli.index')->with('success', 'Articolo creato con successo!');}
/**

* Show the form for editing the specified resource.
*/
public function edit(Articolo $articolo)
{
// empty
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, Articolo $articolo)
{
// empty
}
/**
* Remove the specified resource from storage.
*/
public function destroy(Articolo $articolo)
{
// empty
}
}


?>