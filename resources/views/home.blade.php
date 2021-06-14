@extends('layouts.app')
    
@section('main_content')
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
    @endsection