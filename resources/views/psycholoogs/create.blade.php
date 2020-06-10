@extends('layouts.layout')

@section('content')

    <h1>Vul je profielgegevens aan</h1>

    <form method="post" action="{{ route('psycholoogs.store') }}" enctype="multipart/form-data">
        <div class="form-group">
        @csrf            
        <label for="firstname">Voornaam</label>
        <input type="text" class="form-control" name="firstname" placeholder="Vooraam"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="lastname">Achternaam</label>
            <input type="text" class="form-control" name="lastname" placeholder="Achternaam"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="telephone">Telefoonnummer</label>
            <input type="text" class="form-control" name="telephone" placeholder="Telefoonnummer"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="address">Adres (straat + nummer)</label>
            <input type="text" class="form-control" name="address" placeholder="Adres"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="zipcode">Postcode</label>
            <input type="text" class="form-control" name="zipcode" placeholder="Postcode"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="city">Stad/gemeente</label>
            <input type="text" class="form-control" name="city" placeholder="Stad/gemeente"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="specialisation">Specialisatie</label>
            <input type="text" class="form-control" name="specialisation" placeholder="Specialisatie"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="description">Beschrijving van jezelf</label>
            <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Beschrijving"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Voeg profielgegevens toe</button>
    </form>



@endsection