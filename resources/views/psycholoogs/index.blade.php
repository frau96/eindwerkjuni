@extends('layouts.layout')

@section('content')
<section id="testimonials" class="testimonials section-bg ">
    <div class="container ">
        <div class="section-title">
            <h2>Een overzicht van de psychologen</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>


    
          
          <div class="row justify-content-center">      
    @if(count($psycholoogs) > 0)
        @foreach($psycholoogs as $psycholoog)
        
        <div class="testimonial-item  col-lg-4 col-md-6 ">
           
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3><a href="/psycholoogs/{{$psycholoog->id}}">{{$psycholoog->firstname}} {{$psycholoog->lastname}}</a></h3>
            <h4>{{$psycholoog->specialisation}}</h4>
                <p>{{$psycholoog->description}}</p>
                {{-- <p>E-mail: {{$psycholoog->email}} </p>
                <p>Telefoonnummer: {{$psycholoog->telephone}} </p>
                <p>Adres: {{$psycholoog->address}}, {{$psycholoog->zipcode}} {{$psycholoog->city}} </p> --}}
                
                <a class="btn btn-primary " href="/psycholoogs/availability/{{$psycholoog->id}}">Bekijk de beschikbaarheden</a>
                
            </div>
        
        
    

        @endforeach()
    </div>

    @else
        <p>Er zijn geen psychologen beschikbaar</p>
    @endif
            
    </div>
</section>
    
@endsection