@extends('layouts.layout')

@section('content')

<section id="edit" class="contact section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Beschikbaarheid bewerken</h2>
        </div>
    <button type="button" class="btn btn-info"><a href="/availabilities">< Terug naar beschikbaarheden</a></button>

    <div class="row justify-content-center">
    
    
    <form method="post" action="{{ route('availabilities.update', $availability->id) }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
        <div class="form-group">
        @method('PUT')
        @csrf        
        <label for="beschikbaarheid">Naam beschikbaarheid</label>
        <input type="text" class="form-control" value="{{$availability->subject}}" name="subject" placeholder="Naam beschikbaarheid"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="date">Datum</label>
            <input type="date" class="form-control" value="{{$availability->date}}"  name="date" placeholder="Datum"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="time">Tijdstip</label>
            <input type="time" class="form-control" value="{{$availability->time}}"  name="time" placeholder="Tijdstip"/>
        </div>


        <div class="text-center"><button type="submit" class="btn btn-primary">Beschikbaarheid aanpassen</button></div>

</form>
    </div>
</div>
</section>

@endsection
