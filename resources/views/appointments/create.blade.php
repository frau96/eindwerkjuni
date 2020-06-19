@extends('layouts.layout')

@section('content')

<section id="contact" class="contact">
<div class="container">
    <div class="section-title">
        <h2>Afspraak maken</h2>
    </div>

    
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="{{ route('appointments.store') }}"  enctype="multipart/form-data" class="php-email-form">
        
                <h3> {{$availability->firstname}} {{$availability->lastname}}</h3>
        
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
                    <input type="text" class="form-control" name="client_firstname" placeholder="Voornaam"/>
                    <input type="hidden" class="form-control" name="availability_id" value="{{$availability->id}}"/>
                    <input type="hidden" class="form-control" name="psych_id" value="{{$availability->psych_id}}"/>
                </div>
        
                <div class="form-group">
                    @csrf            
                    <input type="text" class="form-control" name="client_lastname" placeholder="Achternaam"/>
                </div>
        
                <div class="form-group">
                    @csrf            
                    <input type="text" class="form-control" name="client_email" placeholder="Email"/>
                </div>
                <div class="text-center"><button  type="submit">Bevestig afspraak</button></div>
                
            </form>

        </div>

    </div>
</div>

</section>


@endsection