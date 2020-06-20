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
            <img  class="testimonial-img" src="/uploads/{{$psycholoog->photo}}">
                
            <h3><a href="/psycholoogs/{{$psycholoog->id}}" class="blauw">{{$psycholoog->firstname}} {{$psycholoog->lastname}}</a></h3>
            <h4> <p>{{$psycholoog->specialisation}}</p></h4>
                <p><br>{{$psycholoog->description}}</p>
              
                <a class="get-started beschikbaarhedenb" href="/psycholoogs/availability/{{$psycholoog->id}}">Bekijk de beschikbaarheden</a>
            
            </div>

        @endforeach()
    </div>

    @else
        <p>Er zijn geen psychologen beschikbaar</p>
    @endif
            
    </div>
</section>
    
@endsection