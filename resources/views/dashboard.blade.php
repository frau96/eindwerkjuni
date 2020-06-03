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

                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach($availabilities as $availability)
                            <tr>
                                <td>{{$availability->subject}}</td>
                                <td><a href="/availabilities/{{$availability->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['AvailabilitiesController@destroy', $availability->id], 'method' => 'DELETE']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}

                                </td>
                            </tr>
                        
                        

                        @endforeach

                    </table>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
