<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Boolfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Dettagli Boolfolio</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $boolfolio->nome }}</h5>
                <p class="card-text"><strong>Categoria:</strong> {{ $boolfolio->category->name }}</p>               
                <p class="card-text"><strong>Autore:</strong> {{ $boolfolio->autore }}</p>
                <p class="card-text"><strong>Descrizione:</strong> {{ $boolfolio->descrizione }}</p>
                <p class="card-text"><strong>Data di inizio:</strong> {{ $boolfolio->inizio }}</p>
                <p class="card-text"><strong>Data di fine:</strong> {{ $boolfolio->fine }}</p>
                <a href="{{ route('admin.boolfolios.index') }}" class="btn btn-primary">Torna alla lista</a>
            </div>
        </div>
    </div>
</body>

</html>

