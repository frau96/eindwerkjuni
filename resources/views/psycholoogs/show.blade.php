@extends('layouts.layout')

@section('content')
    <section id="testimonials" class="testimonials section-bg ">
        <div class="container">
            
            <div class="section-title">
                <h2>PSYCHOLOOG</h2>
                
            </div>
           
            <a href="/psycholoogs"><i class="icofont-circled-left"></i></a>
            
            <div class="row justify-content-center"> 
                <div class="testimonial-item  col-lg-6 col-md-6 ">
                    <img  class="testimonial-img" src="/uploads/{{$psycholoog->photo}}">
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
  
@endsection