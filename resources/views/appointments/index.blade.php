@extends('layouts.layout')

@section('content')

    <h1>Afspraken - overzicht?</h1>


    @if(count($appointments) > 0)
        @foreach($appointments as $appointment)
            <div class="card card-body bg-light psych">

                <a href="/appointments/{{$appointment->id}}">{{$appointment->subject}}</a>
            
                <p>Datum: {{$appointment->date}}</p>
                <p>Tijdstip: {{$appointment->time}}</p>

                <p>Cliënt: {{$appointment->client_firstname}} {{$appointment->client_lastname}}</p>
                <p>Contactgegevens: {{$appointment->client_email}}</p>

                
                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <!-- edit button -->
                    <button type="button" class="btn btn-success">Bewerk afspraak</a></button>
                    
                    <!-- delete button -->
                    <button type="button" class="btn btn-danger float-right">Delete</button>
                </form>
                              
            </div>

        @endforeach

    @else
        <p>U hebt momenteel geen afspraken gepland</p>
    
    @endif

    

@endsection