@extends('layouts.layout')

@section('content')
<section id="testimonials" class="testimonials section-bg ">
    <div class="container">
        <div class="section-title" >
            <h2>Beschikbaarheden</h2>
            <p>iets van de beshcikbaarheden ...</p>
        </div>
    </div>
    
    @if(count($availabilities) > 0)
    @foreach($availabilities as $availability)
    @guest

    
    <div class="row justify-content-center">
        <div class="testimonial-item  col-lg-4 col-md-6 ">
            <a href="/availabilities/{{$availability->id}}">{{$availability->subject}}</a>
            <p>{{$availability->date}}</p>
            <p>{{$availability->time}}</p>

            <a href="/availabilities/new-appointment/{{$availability->id}}" class="btn btn-info">Maak deze afspraak</a>
        </div>
    </div>

    @else
        <div class="testimonial-item  col-lg-4 col-md-6 ">
            <a href="/availabilities/{{$availability->id}}">{{$availability->subject}}</a>
            <p>{{$availability->date}}</p>
            <p>{{$availability->time}}</p>
        </div>
    </div>

    @endguest
        {{-- <div class="card card-body bg-light psych">
        <h3><a href="/availabilities/{{$availability->id}}">{{$availability->subject}}</a></h3>
            <p>{{$availability->date}}</p>
            <p>{{$availability->time}}</p>

            <a href="/availabilities/new-appointment/{{$availability->id}}" class="btn btn-info">Maak deze afspraak</a>
            <!--<button type="button" class="btn btn-info">Plaats jezelf op de wachtlijst???</button>-->

            <form action="{{ route('availabilities.destroy', $availability->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <!-- edit button -->
                <button type="button" class="btn btn-success"><a href="/availabilities/{{$availability->id}}/edit">Bewerk beschikbaarheid</a></button>
                
                <!-- delete button -->
                    <button type="button" class="btn btn-danger float-right">Delete</button>
            </form>
                          
        </div> --}}

    @endforeach()

@else
    <p>Er zijn geen beschikbaarheden voor deze psycholoog</p>
    <a href="/availabilities/create" class="btn btn-primary">Maak je eerste beschikbaarheid aan</a>

@endif
</section>


   
        
   
   
    

@endsection