<!-- resources/views/articoli/show.blade.php -->
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visualizza Articolo</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/
bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
<div class="card">
<div class="card-header">
<h2>{{ $articolo->nome }}</h2>
</div>

<div class="card-body">
<p>{{ $articolo->descrizione }}</p>
</div>
<div class="card-footer">

<a href="{{ url('/articoli') }}" class="btn btn-primary">Torna alla lista</a>

</div>
</div>
</div>
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.
js" crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.m
in.js" crossorigin="anonymous"></script>
</body>
</html>