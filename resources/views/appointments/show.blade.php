@extends('layouts.layout')

@section('content')

<button type="button" class="btn btn-info"><a href="/appointments">< Terug naar alle afspraken</a></button>

<div class="card card-body bg-light psych">

        <p>Datum: {{$appointment->date}}</p>
        <p>Tijdstip: {{$appointment->time}}</p>

        <p>Cliënt: {{$appointment->client_firstname}} {{$appointment->client_lastname}}</p>
        <p>Contactgegevens: {{$appointment->client_email}}</p>

</div>

    

    

@endsection