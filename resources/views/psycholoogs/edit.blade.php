@extends('layouts.layout')

@section('content')
<section id="edit" class="contact section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Pas je profielgegevens aan</h2>
        </div>
        <div class="row justify-content-center">
            <form method="post" action="{{ route('psycholoogs.update', $psycholoog->id) }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
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
        
                <button type="submit" >Sla nieuwe profielgegevens op</button>
        
        </form>
        </div>

    </div>

</section>

@endsection