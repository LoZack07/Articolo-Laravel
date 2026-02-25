<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\ArticoloService;
class ArticoloController extends Controller
{
protected $articoloService;
public function __construct(ArticoloService $articoloService)
{
$this->articoloService = $articoloService;
}
/**
* Mostra tutti gli articoli.

*/
public function index()
{
$articoli = $this->articoloService->getAll();
return view('articoli.index', compact('articoli'));
}
/**
* Salva un nuovo articolo.
*/
public function store(Request $request)
{
$request->validate([
'titolo' => 'required|string|max:255',
'contenuto' => 'required',
]);
$this->articoloService->create($request->only(['titolo',
'contenuto']));
return redirect()->route('articoli.index')->with('success',
'Articolo creato con successo!');
}

public function show($id)
    {
        // Chiamiamo il service per recuperare l'articolo tramite ID
        $articolo = $this->articoloService->getById($id);

        // Se l'articolo non esiste, Laravel gestirà l'errore (o puoi farlo nel Service)
        return view('articoli.show', compact('articolo'));
    }

    /**
 * Mostra il form per creare un nuovo articolo.
 */
public function create()
{
    return view('articoli.create');
}

/** Mostra il form di modifica */
public function edit($id) {
    $articolo = $this->articoloService->getById($id);
    return view('articoli.edit', compact('articolo'));
}

/** Salva le modifiche */
public function update(Request $request, $id) {
    $request->validate([
        'titolo' => 'required|string|max:255',
        'contenuto' => 'required',
    ]);
    
    $this->articoloService->update($id, $request->only(['titolo', 'contenuto']));
    return redirect()->route('articoli.index')->with('success', 'Articolo aggiornato!');
}

/** Elimina l'articolo */
public function destroy($id) {
    $this->articoloService->delete($id);
    return redirect()->route('articoli.index')->with('success', 'Articolo eliminato!');
}
}