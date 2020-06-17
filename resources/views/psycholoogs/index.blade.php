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
                <p><br>{{$psycholoog->description}}</p>
                <p>E-mail:<br>{{$psycholoog->email}} </p>
                <p>Telefoonnummer:<br> {{$psycholoog->telephone}} </p>
                <p>Adres:<br> {{$psycholoog->address}} {{$psycholoog->zipcode}} {{$psycholoog->city}} </p>
                <p>Specialisatie<br>{{$psycholoog->specialisation}}</p>
                <!--class="font-weight-bold"-->
                <img style="width:100%" src="/uploads/{{$psycholoog->photo}}">


                <a class="btn btn-primary" href="/psycholoogs/availability/{{$psycholoog->id}}">Bekijk de beschikbaarheden</a>
                
                <a class="get-started" href="/psycholoogs/availability/{{$psycholoog->id}}">Bekijk de beschikbaarheden</a>
            
            </div>
        
        
    

        @endforeach()
    </div>

    @else
        <p>Er zijn geen psychologen beschikbaar</p>
    @endif
            
    </div>
</section>
    
@endsection