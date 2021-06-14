<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dettaglio pacchetti:</h1>
    <div><strong>Nome: </strong>{{ $travel->name }}</div>
    <div><strong>Destinazione: </strong>{{ $travel->destination }}</div>
    <div><strong>Descrizione: </strong>{{ $travel->description }}</div>
    <div><strong>Price: </strong>{{ $travel->price }} €</div>
</body>
</html>