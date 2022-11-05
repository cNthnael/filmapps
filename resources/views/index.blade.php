@extends('template')

@section('title', 'NightTime | Now Playing')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="h1">Now Playing</h1>
            <div class="d-flex">
                @foreach($data as $d)
                    <div class="card" style="width: 18rem;">
                        <img src={{$d -> image_path}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$d -> name}}</h5>
                            <p class="card-text">{{$d -> desc}}</p>
                            @if(($d->genre === 'Horror'))
                                <span class="badge text-bg-danger">{{$d->genre}}</span>
                            @else
                                <span class="badge text-bg-primary">{{$d->genre}}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
