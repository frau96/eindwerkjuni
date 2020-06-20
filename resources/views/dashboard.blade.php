@extends('layouts.layout')

@section('content')
<section id="dashboard" class="dashboard section-bg" >
    <div class="container">
        <div class="section-title">
            <h2>Dashboard</h2>
            <p>U bent nu ingelogd.</p>


        </div>
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="col-lg-12 text-center">
            
            @if($isPsycholoog == true)
                <a href="/availabilities" class="btn-link">Bekijk je beschikbaarheden</a>

                <a href="/psycholoogs/{{$psycholoog->id}}/edit" class="btn-link">Pas je profielgegevens aan</a>

                <a href="/appointments" class="btn-link">Bekijk mijn afspraken</a>

                
            @else
                <a href="/psycholoogs/create" class="btn-link">Maak je profielgegevens aan</a>
            @endif
        </div>

        <!--@dump($isPsycholoog)-->
    </div>
    </div>

</section>


@endsection
