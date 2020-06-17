@extends('layouts.layout')

@section('content')
    <section id="testimonials" class="testimonials section-bg ">
        <div class="container">
            
            <div class="section-title">
                <h2>{{$psycholoog->firstname}} {{$psycholoog->lastname}}</h2>
                <p>
                    {{$psycholoog->description}}
                </p>
            </div>
           
            <a href="/psycholoogs"><i class="icofont-circled-left"></i></a>
            
            <div class="row justify-content-center"> 
                <div class="testimonial-item  col-lg-6 col-md-6 ">
                    <img src="/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>{{$psycholoog->firstname}} {{$psycholoog->lastname}}</h3>
                    <h4> <p>Specialisatie: {{$psycholoog->specialisation}}</p></h4>
                <p><br>{{$psycholoog->description}}</p>
                <p>E-mail:<br>{{$psycholoog->email}} </p>
                <p>Telefoonnummer:<br> {{$psycholoog->telephone}} </p>
                <p>Adres:<br> {{$psycholoog->address}}, {{$psycholoog->zipcode}} {{$psycholoog->city}} </p>
                <a class="get-started" href="/psycholoogs/availability/{{$psycholoog->id}}">Maak een afspraak</a>
                </div>


            </div>


        </div>


    </section>
    

            {{-- <button type="button" class="btn btn-info"><a href="/psycholoogs"> < Terug naar overzicht</a></button>
            <div class="psych">
            <h3>{{$psycholoog->firstname}} {{$psycholoog->lastname}}</h3>
                <p><br>{{$psycholoog->description}}</p>
                <p>E-mail:<br>{{$psycholoog->email}} </p>
                <p>Telefoonnummer:<br> {{$psycholoog->telephone}} </p>
                <p>Adres:<br> {{$psycholoog->address}} {{$psycholoog->zipcode}} {{$psycholoog->city}} </p>
                <p>Specialisatie<br>{{$psycholoog->specialisation}}</p>
                <!--class="font-weight-bold"-->
                <img src="/uploads/{{$psycholoog->photo}}">


                <button type="button" class="btn btn-info">Maak een afspraak</button>
                
            </div> --}}

  
@endsection