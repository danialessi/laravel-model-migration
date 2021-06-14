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
                    <a href="{{ route('detail', ['id' => $travel['id']]) }}">
                        <img src="{{$travel->image}}" alt="">
                        <div class="layover"></div>
                    </a>
                    
                </div>
                
                <div class="info">
                    <a href="{{ route('detail', ['id' => $travel['id']]) }}">
                        <h2>{{ $travel->name}}</h2>
                        <h4>{{ $travel->destination}}</h4>
                    </a>
                </div>

            </div>
            @endforeach
        </div>
       
    </main>
    
</body>
</html>