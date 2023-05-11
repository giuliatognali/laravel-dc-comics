@extends('layout.app')


@section('page.title')
    <div class="container pt-3">
        <h1>Elenco Comics</h1>
    </div>
@endsection

@section('page.main')
    <div class="container pt-3">
        <a href="{{ route('comics.create') }}" class="btn btn-success mb-3">Inserisci un nuovo fumetto</a>

        <div class="row">
            <div class="card-comic">
                @foreach ($comics as $comic)
                    <div class="card col-2 m-2">
                        <h6>{{ $comic->title }}</h6>
                        <div class="img">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
