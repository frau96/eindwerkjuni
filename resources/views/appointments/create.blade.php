@extends('layouts.layout')

@section('content')

    <h1>Afspraak maken</h1>

    <form method="post" action="{{ route('appointments.store') }}"  enctype="multipart/form-data">

        // Hier komt ook een bevestiging van de gegevens: datum, tijdstip, psycholoog

        <h3>{{$availability->firstname}} {{$availability->lastname}}</h3>

        <div class="form-group">
            @csrf            
            <label for="date">Datum</label>
            <p>{{$availability->date}}</p>
        </div> 

        <div class="form-group">
            @csrf            
            <label for="time">Tijdstip</label>
            <p>{{$availability->time}}</p>
        </div>


        <div class="form-group">
            @csrf            
            <label for="client_firstname">Voornaam</label>
            <input type="text" class="form-control" name="client_firstname" placeholder="Voornaam"/>
            <input type="hidden" class="form-control" name="availability_id" value="{{$availability->id}}"/>
            <input type="hidden" class="form-control" name="psych_id" value="{{$availability->psych_id}}"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="client_lastname">Achternaam</label>
            <input type="text" class="form-control" name="client_lastname" placeholder="Achternaam"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="client_email">Email</label>
            <input type="text" class="form-control" name="client_email" placeholder="Email"/>
        </div>

        <button type="submit" class="btn btn-primary">Bevestig afspraak</button>
    </form>


@endsection