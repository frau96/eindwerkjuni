@extends('layouts.layout')

@section('content')

    <h1>Beschikbaarheden</h1>


    @if(count($availabilities) > 0)
        @foreach($availabilities as $availability)
            <div class="card card-body bg-light psych">
            <h3><a href="/availabilities/{{$availability->id}}">{{$availability->subject}}</a></h3>
                <p>{{$availability->date}}</p>
                <p>{{$availability->time}}</p>

                <form action="{{ route('availabilities.destroy', $availability->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <!-- edit button -->
                    <button type="button" class="btn btn-success"><a href="/availabilities/{{$availability->id}}/edit">Bewerk beschikbaarheid</a></button>
                    
                    <!-- delete button -->
                        <button type="button" class="btn btn-danger float-right">Delete</button>
                </form>

                <a href="/availabilities/new-appointment/{{$availability->id}}" class="btn btn-info">Maak deze afspraak</a>
                <!--<button type="button" class="btn btn-info">Plaats jezelf op de wachtlijst???</button>-->
                              
            </div>

            

        @endforeach()

    @else
        <p>Er zijn geen beschikbaarheden voor deze psycholoog</p>
        <a href="/availabilities/create" class="btn btn-primary">Maak je eerste beschikbaarheid aan</a>

    @endif

@endsection