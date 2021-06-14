@extends('layouts.app')

@section('main_content')
    <div class="container">

        <div class="travel-title">
            <h2>{{ $travel->name }}</h2>  
        </div>

        <div class="package-container">
            
            <div class="travel-image">
                <img src="{{ $travel->image}}" alt="">
            </div>
    
            <div class="details-container">
                <h3>La tua vacanza</h3>

                <div class="details">
                    
                    <div><strong>Destinazione: </strong>{{ $travel->destination }}</div>
                    <div><strong>Descrizione: </strong>{{ $travel->description }}</div>
                    <div class="price">
                        {{ $travel->price }} €
                    </div>
                </div>
                
                </div>
            
        </div>
        
    </div>
    
@endsection