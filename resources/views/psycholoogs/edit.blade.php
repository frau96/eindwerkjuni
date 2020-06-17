@extends('layouts.layout')

@section('content')

    <h1>Pas je profielgegevens aan</h1>


    <form method="post" action="{{ route('psycholoogs.update', $psycholoog->id) }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        @method('PUT')
        @csrf        
        <label for="firstname">Voornaam</label>
        <input type="text" class="form-control" value="{{$psycholoog->firstname}}" name="firstname" placeholder="Voornaam"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="lastname">Achternaam</label>
            <input type="text" class="form-control" value="{{$psycholoog->lastname}}" name="lastname" placeholder="Achternaam"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="email">Email</label>
            <input type="text" class="form-control" value="{{$psycholoog->email}}" name="email" placeholder="Email"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="telephone">Telefoonnummer</label>
            <input type="text" class="form-control" value="{{$psycholoog->telephone}}" name="telephone" placeholder="Telefoonnummer"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="address">Adres (straat + nummer)</label>
            <input type="text" class="form-control" value="{{$psycholoog->address}}" name="address" placeholder="Adres"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="zipcode">Postcode</label>
            <input type="text" class="form-control" value="{{$psycholoog->zipcode}}" name="zipcode" placeholder="Postcode"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="city">Stad/gemeente</label>
            <input type="text" class="form-control" value="{{$psycholoog->city}}" name="city" placeholder="Stad/gemeente"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="specialisation">Specialisatie</label>
            <input type="text" class="form-control" value="{{$psycholoog->specialisation}}" name="specialisation" placeholder="Specialisatie"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="description">Beschrijving van jezelf</label>
            <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Beschrijving">{{$psycholoog->description}}</textarea>
        </div>

        <div class="form-group">       
            <label for="description">Upload eigen profielfoto</label>
            <input type="file" value="{{$psycholoog->photo}}" class="form-control" name="photo">
        </div>

        <button type="submit" class="btn btn-primary">Sla nieuwe profielgegevens op</button>

</form>

@endsection