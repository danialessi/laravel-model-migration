<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>

    <h1>Travel Agency</h1>
    <h2>I nostri pacchetti</h2>
    
    <div>
        @foreach ($travels as $travel)
            <img src="{{$travel->image}}" alt="">
            <div><strong>Nome:</strong>{{ $travel->name}}</div>
            <div><strong>Destinazione:</strong>{{ $travel->destination}}</div>
            <div><strong>Descrizione:</strong>{{ $travel->description}}</div>
            <div><strong>Prezzo:</strong>{{ $travel->price}} €</div>
        @endforeach
    </div>
        
    
   
    
</body>
</html>