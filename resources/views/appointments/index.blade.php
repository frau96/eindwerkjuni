@extends('layouts.layout')

@section('content')
<section id="Afspraken" class="testimonials section-bg ">
    <div class="container">
        <div class="section-title">
            <h2>Afspraken overzicht</h2>
        </div>
        <div class="row justify-content-center">
            @if(count($appointments) > 0)
            @foreach($appointments as $appointment)
            <div class="testimonial-item  col-lg-4 col-md-6 ">
                <p>Datum: {{$appointment->date}}</p>
                <p>Tijdstip: {{$appointment->time}}</p>

                <p>Cliënt: {{$appointment->client_firstname}} {{$appointment->client_lastname}}</p>
                <p>Contactgegevens: {{$appointment->client_email}}</p>

                
                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')                    
                    <!-- delete button -->
                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                </form>

                              
            </div>

        @endforeach
        </div>
        @else
        <p>U hebt momenteel geen afspraken gepland</p>
    
    @endif

    </div>

</section>


    

@endsection