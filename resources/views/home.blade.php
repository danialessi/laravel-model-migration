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
    <header>
        
        <div class="container">
            <div class="title">
                <h1>Travel Agency</h1>
            </div>
        </div>
        
    </header>
    
    <main>
        <div class="container">
            <div class="main-title">
                <h2>I nostri pacchetti</h2>
            </div>
            
            @foreach ($travels as $travel)
            <div class="travel-package">
            
                
                <div class="image">
                    <img src="{{$travel->image}}" alt="">
                    <div class="layover"></div>
                </div>
                
                <div class="info">
                    <div><strong>Nome: </strong>{{ $travel->name}}</div>
                    <div><strong>Destinazione: </strong>{{ $travel->destination}}</div>
                    <div><strong>Descrizione: </strong>{{ $travel->description}}</div>
                    <div><strong>Prezzo: </strong>{{ $travel->price}} €</div>
                </div>

            </div>
            @endforeach
        </div>
       
    </main>
    
</body>
</html>