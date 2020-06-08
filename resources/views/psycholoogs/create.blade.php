@extends('layouts.layout')

@section('content')

    <h1>Vul je profielgegevens aan</h1>

    <form method="post" action="{{ route('psycholoogs.store') }}"  enctype="multipart/form-data">
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


        <button type="submit" class="btn btn-primary">Beschikbaarheid toevoegen</button>
    </form>



@endsection