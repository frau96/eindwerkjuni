@extends('layouts.layout')

@section('content')

    <h1>Afspraken - overzicht?</h1>


    @if(count($appointments) > 0)
        @foreach($appointments as $appointment)
            <div class="card card-body bg-light psych">
            
                
                              
            </div>

        @endforeach

    @else
        <p>U hebt momenteel geen afspraken gepland</p>
    
    @endif

    

@endsection