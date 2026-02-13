<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Aggiungi Articolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Nuovo Articolo</h1>
    <form action="{{ route('articoli.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Articolo</label>
            <input type="text" name="nome" class="form-control" id="nome" required>
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea name="descrizione" class="form-control" id="descrizione"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salva</button>
        <a href="{{ route('articoli.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
</body>
</html>