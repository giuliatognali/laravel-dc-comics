@extends('layout.app')


@section('page.title')
    <div class="container pt-3">
        Elenco Comics
    </div>
@endsection

@section('page.main')
    <div class="container pt-3">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card col-2 p-2 m-2">
                    <h6>{{ $comic->title }}</h6>
                    <div class="img">
                        <img src="{{ $comic->thumb }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection