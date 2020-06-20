@extends('layouts.layout')

@section('content')
<div class="container section-bg"> 
    <div class="section-title">
        <h1>Nieuwe beschikbaarheid aanmaken</h1>
    </div>
    

    <form method="post" action="{{ route('availabilities.store') }}"  enctype="multipart/form-data" > 
        <div class="form-group">
        @csrf            
        <label for="beschikbaarheid">Naam beschikbaarheid</label>
        <input type="text" class="form-control" name="subject" placeholder="Naam beschikbaarheid"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="date">Datum</label>
            <input type="date" class="form-control" name="date" placeholder="Datum"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="time">Tijdstip</label>
            <input type="time" class="form-control" name="time" placeholder="Tijdstip"/>
        </div>
        <div class="text-center"><button type="submit">Beschikbaarheid toevoegen</button></div>

    </form>

</div>

@endsection

