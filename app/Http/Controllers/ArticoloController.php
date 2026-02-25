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
}