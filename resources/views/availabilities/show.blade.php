@extends('layouts.layout')

@section('content')

<button type="button" class="btn btn-info"><a href="/availabilities">< Terug naar beschikbaarheden</a></button>

    <h1>{{$availability->subject}}</h1>


    <p>{{$availability->date}}</p>
    <p>{{$availability->time}}</p>

   


    <form action="{{ route('availabilities.destroy',$availability->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <!-- edit button -->
        <button type="button" class="btn btn-success"><a href="/availabilities/{{$availability->id}}/edit">Bewerk beschikbaarheid</a></button>
        
        <!-- delete button -->
            <button type="submit" class="btn btn-danger float-right">Delete</button>
    </form>

    

@endsection