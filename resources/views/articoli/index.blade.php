<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/
bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista Articoli</h1>

        <div class="mb-3">
        <a href="{{ route('articoli.create') }}" class="btn btn-primary">Aggiungi Articolo</a>
        </div>
        <!-- Tabella degli articoli -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articoli as $articolo)
                        <tr>
                            <td>{{ $articolo->id }}</td>
                            <td>{{ $articolo->nome }}</td>
                            <td>
                            <a href="{{ route('articolo.show',$articolo->id) }}" class="btn btn-info">Visualizza</a>
                            <!-- Aggiungi pulsanti di modifica o eliminazione se necessario -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <!-- Scripts di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.
js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.m
in.js" crossorigin="anonymous"></script>
</body>

</html>