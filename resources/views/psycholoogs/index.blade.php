@extends('layouts.layout')

@section('content')

    <h1>Een overzicht van de psychologen</h1>

    @if(count($psycholoogs) > 0)
        @foreach($psycholoogs as $psycholoog)
            <div class="card card-body bg-light psych">
            <h3><a href="/psycholoogs/{{$psycholoog->id}}">{{$psycholoog->firstname}} {{$psycholoog->lastname}}</a></h3>
                <p><br>{{$psycholoog->description}}</p>
                <p>E-mail:<br>{{$psycholoog->email}} </p>
                <p>Telefoonnummer:<br> {{$psycholoog->telephone}} </p>
                <p>Adres:<br> {{$psycholoog->address}} {{$psycholoog->zipcode}} {{$psycholoog->city}} </p>
                <p>Specialisatie<br>{{$psycholoog->specialisation}}</p>
                <!--class="font-weight-bold"-->


                <button type="button" class="btn btn-info">Maak een afspraak</button>
                
            </div>

        @endforeach()

    @else
        <p>Er zijn geen psychologen beschikbaar</p>
    @endif
    
@endsection