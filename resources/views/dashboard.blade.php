@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    Je bent nu ingelogd
                </div>
                <div class="card-footer">
                    @if($isPsycholoog == true)
                        <a href="/availabilities" class="btn btn-primary">Bekijk je beschikbaarheden</a>
                        <!--<a href="/psycholoogs//edit" class="btn btn-primary">Pas je profielgegevens aan</a>-->



                        
                    @else
                        <a href="/psycholoogs/create" class="btn btn-primary">Maak je profielgegevens aan</a>
                    @endif
                </div>

                <!--@dump($isPsycholoog)-->
            </div>
        </div>
    </div>
</div>
@endsection
