@extends('layouts.app') @section('content')
<div class="container">
    <h1>Modifica Articolo</h1>

    <form action="{{ route('articoli.update', $articolo->id) }}" method="POST">
        @csrf
        @method('PUT') <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" name="titolo" class="form-control" id="titolo" value="{{ $articolo->titolo }}" required>
        </div>

        <div class="mb-3">
            <label for="contenuto" class="form-label">Contenuto</label>
            <textarea name="contenuto" class="form-control" id="contenuto" rows="5" required>{{ $articolo->contenuto }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        <a href="{{ route('articoli.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection