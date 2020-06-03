@extends('layouts.layout')

@section('content')

    <h1>Beschikbaarheid bewerken</h1>
    <form method="post" action="{{ route('availabilities.update', $availability->id) }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        @method('PUT')
        @csrf        
        <label for="beschikbaarheid">Naam beschikbaarheid</label>
        <input type="text" class="form-control" value="{{$availability->subject}}" name="subject" placeholder="Naam beschikbaarheid"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="date">Datum</label>
            <input type="date" class="form-control" value="{{$availability->date}}"  name="date" placeholder="Datum"/>
        </div>

        <div class="form-group">
            @csrf            
            <label for="time">Tijdstip</label>
            <input type="time" class="form-control" value="{{$availability->time}}"  name="time" placeholder="Tijdstip"/>
        </div>


        <button type="submit" class="btn btn-primary">Beschikbaarheid aanpassen</button>
</form>

@endsection

<form method="post" action="{{ route('posts.update',$post->id) }}" method="POST">
    <div class="form-group">
    @method('PUT')
    @csrf            
    <label for="title">Title</label>
    <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="Title"/>
    </div>
    <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Body Text">{{$post->body}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Post</button>
</form>