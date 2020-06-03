@extends('layouts.layout')

@section('content')

    

            <button type="button" class="btn btn-info"><a href="/psycholoogs"> < Terug naar overzicht</a></button>
            <div class="psych">
            <h3>{{$psycholoog->firstname}} {{$psycholoog->lastname}}</h3>
                <p><br>{{$psycholoog->description}}</p>
                <p>E-mail:<br>{{$psycholoog->email}} </p>
                <p>Telefoonnummer:<br> {{$psycholoog->telephone}} </p>
                <p>Adres:<br> {{$psycholoog->address}} {{$psycholoog->zipcode}} {{$psycholoog->city}} </p>
                <p>Specialisatie<br>{{$psycholoog->specialisation}}</p>
                <!--class="font-weight-bold"-->


                <button type="button" class="btn btn-info">Maak een afspraak</button>
                
            </div>

  
@endsection